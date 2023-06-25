<div id="modal01" class="modal js-modal" style="display:block;">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="top_text">
            <p class="f14">こちらの内容で見積を登録しますか？</p>
            <p class="item_name f14">{{ $management_company->code }}-{{ $code }}-{{ $construction_type->id_formatted }}</p>
        </div>
        <div class="modal_box f14">
            <div class="content_block">
                <div class="content">
                    <p class="item">物件</p>
                    <p>{{ $property->name }}</p>
                </div>
                <div class="content">
                    <p class="item">号室</p>
                    <p>{{ $data['room'] }}</p>
                </div>
                <div class="content">
                    <p class="item">工事内容</p>
                    <p>{{ $data['description'] }}</p>
                </div>
            </div>
            <div class="btn_block f16">
                <a class="back" tabindex="1">戻る</a>
                <a class="confirm o_btn" id="create_complete" tabindex="2">確定</a>
            </div>
        </div>
        <form method="POST" action="{{ route('estimation.create.complete')}}" id="form_create_complete">
            @csrf
            @method('PUT')
                @foreach ($data as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach
        </form>
    </div>
</div>
<!--/modal-->
