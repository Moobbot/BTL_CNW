<script src="../assets/js/jquery-3.2.1.min.js"> </script>
<style>
.comment-form-container {

    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
    /* padding-bottom: 5rem !important; */
}

.input-row {
    margin-bottom: 20px;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
}



.btn-submit {
    padding: 10px 20px;
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor: pointer;
}

ul {
    list-style-type: none;
}

.comment-row {
    border-bottom: #e0dfdf 1px solid;
    margin-bottom: 15px;
    padding: 15px;
}

.outer-comment {
    background: #F0F0F0;
    padding: 20px;
    border: #dedddd 1px solid;
}

span.commet-row-label {
    font-style: italic;
}

span.posted-by {
    color: #09F;
}

.comment-info {
    font-size: 0.8em;
}

.comment-text {
    margin: 10px 0px;
}

.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor: pointer;
}

#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
</style>

<div class="comment-form-container ">
    <form id="frm-comment">
        <h1 class="">Bình luận</h1>
        <div class="input-row">
            <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> <input class="input-field"
                type="text" name="name" id="name" placeholder="Tên" />
        </div>
        <div class="input-row">
            <textarea class="input-field" type="text" name="comment" id="comment"
                placeholder="Add a Comment">  </textarea>
        </div>
        <div>
            <input type="button" class="btn-submit" id="submitButton" value="Gửi" />
            <div id="comment-message">Bình luận thành công!</div>
        </div>

    </form>
</div>

<div id="output"></div>
<script src="../assets/js/jquery-3.2.1.min.js"> </script>
<script src="../assets/js/comment.js"></script>