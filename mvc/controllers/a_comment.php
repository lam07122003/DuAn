<?php
class a_comment extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model Comment
        $this->CommentModel = $this->a_model('comment');
    }

    public function index()
    {
        //gọi method getcomment
        $comment  = $this->CommentModel->getComment();

        //gọi và show dữ liệu ra view
        $this->a_view_comment('index', [
            'comment' => $comment,
            'title'=> 'Quản lý bình luận'
        ]);
    }

    public function delete($id){
        $delete = $this->CommentModel->deleteComment($id);
        if($delete){
            header('location:'.URL_ADMIN_COMMENT);

        }
        $this->a_view_comment('index');
    }
}
