<div id="modal01" class="modal js-modal simple" style="display:block;">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="top_text">
            <p class="f14" style="color:red;">{{ session('error_msg') ? session('error_msg') : 'エラーが発生しました。' }}</p>
        </div><!-- /.top_text -->
        <div class="btn_block f16">
            <p class="back js-modal-close">閉じる</p>
        </div><!-- /.btn_block -->
    </div>
</div>
