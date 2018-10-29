<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class SitesController extends Controller
{
    /**
     * 退出登录
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {

            session_start();
            unset($_SESSION['admin_name']);
            unset($_SESSION['pwd']);
            echo "<script>alert('注销成功');window.location.href='login'</script>";
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();  //获取上传的信息
        // 判断是否上传文件并获取,并将上传的信息录入到数据库
        if(empty($files = $request->file())){
            DB::table($data['colId'])
                ->insert([
                    'author'=>$data["author"],
                    'title'=>$data["title"],
                    'department'=>$data["department"],
                    'content'=>$data["content"],
                    'date'=>$data["date"]
                ]);    
        }else{
            $res = $this->uploadFile($files);
            //上传文件路径  storage_path().'\app\uploads\\'.$res[0]['filename'];
            if(count($res) == 1){
                if($res[0]['ext'] == 'pdf'){
                    DB::table($data['colId'])
                    ->insert([
                        'author'=>$data["author"],
                        'title'=>$data["title"],
                        'department'=>$data["department"],
                        'content'=>$data["content"],
                        'pdf'=>$res[0]["finalPath"],
                        'date'=>$data["date"]
                    ]);
                }else{
                    DB::table($data['colId'])
                    ->insert([
                        'author'=>$data["author"],
                        'title'=>$data["title"],
                        'department'=>$data["department"],
                        'content'=>$data["content"],
                        'pic'=>$res[0]["finalPath"],
                        'date'=>$data["date"]
                    ]);
                }
                
            }elseif(count($res) == 2){
                DB::table($data['colId'])
                ->insert([
                    'author'=>$data["author"],
                    'title'=>$data["title"],
                    'department'=>$data["department"],
                    'content'=>$data["content"],
                    'pic'=>$res[0]["finalPath"],
                    'pdf'=>$res[1]["finalPath"],
                    'date'=>$data["date"]
                ]);
            }
        }
        echo "<script>alert('上传成功');history.back()</script>";
    }
    
    /**
    * 处理上传的文件.
    *
    */
    public function uploadFile($files){
        $res = array(array());
        $i = 0;
        foreach($files as $file){
            $res[$i]['ext'] = $file->getClientOriginalExtension(); //获取文件拓展名
            $res[$i]['realPath'] = $file->getRealPath();   //临时文件的绝对路径
            $res[$i]['filename'] = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $res[$i]['ext']; //设置文件名

            $res[$i]['bool'] = Storage::disk('uploads')->put($res[$i]['filename'], file_get_contents($res[$i]['realPath'])); //将文件存储到uploads
            $res[$i]['finalPath'] = '/uploads/'.$res[$i]['filename'];
            $i++;
        }
        return $res;
    }
    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    //后台评估动态展示
    public function show(Request $request)
    {
        $rout = $request->input('rout');
        $table = $request->input('table');
        $data = DB::table($table)->orderBy('date','desc')->get(['id','title','author','date']);
        return view($rout,compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $table = $request->input('table');
        $id = $request->input('id');
        $result = DB::table($table)->where('id',$id)->delete();
        if ($result)
        {
            echo "<script>alert('删除成功！');history.back()</script>";
        }else{
            echo "<script>alert('删除失败，请稍后重试！');history.back()</script>";
        }
    }


    //登陆管理
    public function login(Request $request)
    {
        $data = $request->input();
        $username=$data['username'];
        $password=$data['pwd'];
        //检索管理员账户密码
        $result=DB::table('user')->where('name',$username)->first();
        $pwd = $result->password;
//        执行判断
        if($pwd==$password)
        {
            session_start();    //初始化session变量
            //存储$_SESSION变量
            $_SESSION['admin_name'] = $username;
            $_SESSION['pwd'] = $password;
            return view('admin.admin');
        }else {
            echo "<script language='javascript'>alert('您输入的管理员名称或密码错误，请重新输入！');history.back();</script>";
            exit;
        }
    }
}
