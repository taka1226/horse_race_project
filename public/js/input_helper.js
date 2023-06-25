/** input-helper **/
// 対象input要素のid
let helper = "helper_1";
// 入力候補を表示する要素を判定
let element = document.getElementById(helper);
let items =
    element.parentElement.getElementsByClassName("input-helper-items")[0];
let itemsIsHover = false;

// inputの値にマッチする入力候補を表示する処理
const showInputHelper = (items, inputHelperItems, element) => {
    let value = element.value;
    items.innerHTML = "";
    value = simplify(value);

    for (var i = 0; i < inputHelperItems.length; i++) {
        var key = Object.keys(inputHelperItems[i])[0];
        var val = Object.values(inputHelperItems[i])[0];
        if (~simplify(val).indexOf(value) || ~key.indexOf(value)) {
            var li = document.createElement("li");
            li.innerHTML = key + " : " + val;
            li.setAttribute("value", key);
            li.setAttribute(
                "onClick",
                "setHelperItem(this, " + element.id + ', "' + val + '")'
            );
            li.setAttribute("tabindex", 0);

            items.appendChild(li);
        }
    }
    if (i > 0) {
        items.classList.remove("standby");
    } else {
        items.classList.add("standby");
    }
};

// 選択した項目からinputに値を渡す処理
const setHelperItem = (e, target, name) => {
    target.value = name;
    e.parentElement.classList.add("standby");
    itemsIsHover = false;

    //input[name="property_id"] に property.id を保存
    let input_property_id = document.getElementsByName("property_id")[0];
    input_property_id.value = e.value;

    // let show = target.parentElement.getElementsByClassName("input-helper-string")[0];
    // showHelperString(name, show);
};

// const showHelperString = (string, target) => {
//     target.innerHTML = " : " + string;
// };

// Input Helperを非表示にする処理
const clearInputHelper = (items) => {
    items.classList.add("standby");
    itemsIsHover = false;
};

// 検索用に文字列を平準化
const simplify = (str) => {
    // 全角英数を半角化、大文字を小文字
    str = str
        .replace(/[Ａ-Ｚａ-ｚ０-９]/g, (c) => {
            return String.fromCharCode(c.charCodeAt(0) - 65248);
        })
        .toLowerCase();
    // ひらがなをカタカナ化
    str = str.replace(/[\u3041-\u3096]/g, (c) => {
        return String.fromCharCode(c.charCodeAt(0) + 0x60);
    });
    // カタカナを半角化
    let kanaReg = new RegExp("(" + Object.keys(kanaMap).join("|") + ")", "g");
    str = str
        .replace(kanaReg, (c) => {
            return kanaMap[c];
        })
        .replace(/゛/g, "ﾞ")
        .replace(/゜/g, "ﾟ");

    return str;
};

// カタカナ&よく使う記号の全角>>半角変換用マップ
const kanaMap = {
    ガ: "ｶﾞ",
    ギ: "ｷﾞ",
    グ: "ｸﾞ",
    ゲ: "ｹﾞ",
    ゴ: "ｺﾞ",
    ザ: "ｻﾞ",
    ジ: "ｼﾞ",
    ズ: "ｽﾞ",
    ゼ: "ｾﾞ",
    ゾ: "ｿﾞ",
    ダ: "ﾀﾞ",
    ヂ: "ﾁﾞ",
    ヅ: "ﾂﾞ",
    デ: "ﾃﾞ",
    ド: "ﾄﾞ",
    バ: "ﾊﾞ",
    ビ: "ﾋﾞ",
    ブ: "ﾌﾞ",
    ベ: "ﾍﾞ",
    ボ: "ﾎﾞ",
    パ: "ﾊﾟ",
    ピ: "ﾋﾟ",
    プ: "ﾌﾟ",
    ペ: "ﾍﾟ",
    ポ: "ﾎﾟ",
    ヴ: "ｳﾞ",
    ヷ: "ﾜﾞ",
    ヺ: "ｦﾞ", // 'ヷ'とかどう打つんでしょ。。。
    ア: "ｱ",
    イ: "ｲ",
    ウ: "ｳ",
    エ: "ｴ",
    オ: "ｵ",
    カ: "ｶ",
    キ: "ｷ",
    ク: "ｸ",
    ケ: "ｹ",
    コ: "ｺ",
    サ: "ｻ",
    シ: "ｼ",
    ス: "ｽ",
    セ: "ｾ",
    ソ: "ｿ",
    タ: "ﾀ",
    チ: "ﾁ",
    ツ: "ﾂ",
    テ: "ﾃ",
    ト: "ﾄ",
    ナ: "ﾅ",
    ニ: "ﾆ",
    ヌ: "ﾇ",
    ネ: "ﾈ",
    ノ: "ﾉ",
    ハ: "ﾊ",
    ヒ: "ﾋ",
    フ: "ﾌ",
    ヘ: "ﾍ",
    ホ: "ﾎ",
    マ: "ﾏ",
    ミ: "ﾐ",
    ム: "ﾑ",
    メ: "ﾒ",
    モ: "ﾓ",
    ヤ: "ﾔ",
    ユ: "ﾕ",
    ヨ: "ﾖ",
    ラ: "ﾗ",
    リ: "ﾘ",
    ル: "ﾙ",
    レ: "ﾚ",
    ロ: "ﾛ",
    ワ: "ﾜ",
    ヲ: "ｦ",
    ン: "ﾝ",
    ァ: "ｧ",
    ィ: "ｨ",
    ゥ: "ｩ",
    ェ: "ｪ",
    ォ: "ｫ",
    ッ: "ｯ",
    ャ: "ｬ",
    ュ: "ｭ",
    ョ: "ｮ",
    "。": "｡",
    "、": "､",
    ー: "ｰ",
    "「": "｢",
    "」": "｣",
    "・": "･",
    "：": ":",
    "％": "%",
    "・": "•",
};

//引数のinputHelperItems は 候補のリスト
function setEventListenerInputHelper(inputHelperItems) {
    // イベントリスナーで処理を呼び出し
    element.addEventListener("input", function () {
        let input_property_id = document.getElementsByName("property_id")[0];
        input_property_id.value = "";
        showInputHelper(items, inputHelperItems, element);
    });

    element.addEventListener("focus", function () {
        showInputHelper(items, inputHelperItems, element);
    });

    element.addEventListener("blur", function () {
        if (!itemsIsHover) {
            let input_property_id =
                document.getElementsByName("property_id")[0];

            input_property_id.val = "";
            clearInputHelper(items);
        }
    });

    items.addEventListener("mouseover", function () {
        itemsIsHover = true;
    });
    items.addEventListener("mouseleave", function () {
        itemsIsHover = false;
    });
}

//データの事前加工
function getDataArray(data) {
    const datachar = Object.values(data);
    let strdata = "";
    let inquote = false;

    for (var i = 0; i < datachar.length; i++) {
        if (datachar[i] == '"') {
            inquote = !inquote;
        }
        if (inquote && datachar[i] == ",") {
            datachar[i] = "【innerComma】";
        }
        strdata += datachar[i];
    }
    strdata = strdata.slice(1, -1);
    const arrdata = strdata.split(",");
    for (var i = 0; i < arrdata.length; i++) {
        arrdata[i] = JSON.parse(
            "{" + arrdata[i].replace("【innerComma】", ",") + "}"
        );
    }
    return arrdata;
}
