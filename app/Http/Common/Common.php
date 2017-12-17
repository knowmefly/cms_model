<?php
    namespace App\Http\Common;

    class Common{
        /**
         * 处理上传的文件.
         *
         * @param  array  $files
         * @return \Illuminate\Http\Response
         */
        public function uploadFile($files){
            $res = array(array());
            $i = 0;
            foreach($file as $files){
                $res[$i]['ext'] = $file->getClientOriginalExtension(); //获取文件拓展名
                $res[$i]['realPath'] = $file->getRealPath();   //临时文件的绝对路径
                $res[$i]['filename'] = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext; //设置文件名

                $res[$i]['bool'] = Storage::disk('uploads')->put($filename, file_get_contents($realPath)); //将文件存储到uploads
                $i++;
            }
            return $res;
        }
    
    }