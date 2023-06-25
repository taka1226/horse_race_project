<div id="modal01" class="modal js-modal simple" style="display:block;">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="top_text">
            <p class="f14">日報を登録しました。</p>
            <div class="day_text f14">
                <p class="day">{{ session('complete_date') }}</p>
                <p class="name">{{ session('complete_username') }}</p><!-- /.name -->
            </div><!-- /.day_text -->
        </div><!-- /.top_text -->
        <div class="btn_block f16">
            <p class="back js-modal-close" tabindex="1">閉じる</p>
        </div><!-- /.btn_block -->
    </div>
</div>
<!--/modal-->
