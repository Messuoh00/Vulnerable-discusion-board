<?= $this->extend('template.php') ?>

<?= $this->section('content') ?>
<div class="container mb-4">
    <div class="row d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-12 blog__details__title">
                <h2><?= $post['title'] ?></h2>
                <h6><?= $post['type'] ?> <span>- <?= $post['created'] ?></span></h6>
            </div>
        </div>
        <div class="row w-100">
            <div class="col-2">
                <img class="rounded-circle" src="/uploads/avatars/<?= $post['profile_picture'] ?>">
            </div>
            <div class="col-10 blog__details__content">
                <a style="color:white" href="/profile/<?= $post['author'] ?>">
                    <span style="font-weight:800">
                        <?= $post['author'] ?> </span>
                    &lt;Moderator&gt;
                </a>
                <div class="blog__details__text mt-4">
                    <p><?= $post['content'] ?></p>
                </div>
                
                <div class="blog__details__tags">
                    <a href="/#">Healthfood</a>
                    <a href="/#">Sport</a>
                    <a href="/#">Game</a>
                </div>
            </div>
            <?php if ($id['session']==$post['author'] ){?>

            <form action="<?=$post['id']?>/delete" method='post'>

                <input type="submit" value='delete post' class='float-left'>

            </form>

            <?php }?>
            <br><br>
        </div>
            
        <div class="row w-100">
            <div class="col-12">
                <div class="blog__details__btns">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__btns__item">
                                <h5><a href="/#"><span class="arrow_left"></span> Building a Better LiA...</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog__details__btns__item next__btn">
                                <h5><a href="/#">Mugen no Juunin: Immortal – 21 <span class="arrow_right"></span></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__details__comment">
                    <h4><?= count($post['replies']); ?> Replies</h4>
                    <?php foreach ($post['replies'] as $reply) : ?>
                        <div class="row blog__details__comment__item">
                            <div class="col-2 blog__details__comment__item__pic">
                                <img style="width:100%" class="rounded-circle" src="/uploads/avatars/<?= $reply['profile_picture'] ?>" alt="">
                                
                            </div>
                            
                            <div class="col-10 blog__details__comment__item__text">
                           
                            <?php if ($id['session']==$reply['author'] ){?>

                                <form action="<?= $reply['id']?>/deletecomment" method='post'>

                                    <input type="submit" value='delete comment' class="float-right">

                                </form>

                            <?php }?>
                                <a href="/profile/<?= $reply['author'] ?> ">
                                    <h5 style="font-weight:800"><?= $reply['author'] ?>
                                    </h5>
                                </a>

                                <span class=" horodatage"><?= $reply['created'] ?></span>
                                <p><?= $reply['content'] ?></p>
                          
                            </div>
                            
                        </div>
                    
                    <?php endforeach; ?>

                </div>
                <div class="blog__details__form">
                    <h4>Leave A Reply</h4>
                    <form action="<?= $id['id'] ?>/comment"  method="post" >
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="mb-2" placeholder="Reply..." name="comment"></textarea>
                            </div>
                            <div class="col-12 mb-4 d-flex justify-content-end">
                                <input type="submit" value='comment'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    postID = window.location.href.split("/").pop();
    document.getElementById("commentForm").onsubmit = async (e) => {
        e.preventDefault();
        let data = new FormData(e.target);
        let response = await fetch(`/forums/${postID}/comment`, {
            body: data,
            method: "POST"
        });
        let json = JSON.parse(await response.json());

        if (json.success == 1) {
            alert('sucess');
            location.reload();
        }else{
            alert("failed");
        }
    }
</script>

<?= $this->endSection() ?>