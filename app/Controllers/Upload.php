<?php

namespace App\Controllers;

class Upload extends BaseController
{
    protected $helpers = ['form'];

   

    public function upload()
    {
        $validated = $this->validate([
            'userfile' => [
                'uploaded[userfile]',
                'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[userfile,4096]',
            ],
        ]);
        
        if ($validated) {
            $img = $this->request->getFile('userfile');
            // but use the ClientExtension

            //$imgname = $_SESSION['id']"." . $img->getClientExtension();  brahim original code

            $imgname = $_SESSION['username'].'.'.$img->getClientExtension();
            // move it from temp to upload/x.php so it'll be executable

            if(file_exists('uploads/avatars/'.$imgname)) 
            {
              
               unlink('uploads/avatars/'.$imgname);
               
            }

            $img->move('uploads/avatars', $imgname);
            
            var_dump($imgname);

        }else{
            var_dump($validated);
        }

        return redirect()->back();

    }
}
