$(document).ready(function () {
    $('input.cnt, textarea.cnt').characterCounter();
});

/**
 * 指定文字列コピー処理
 * @param {type} string
 * @returns {undefined}
 */
function execCopy(string) {
    var temp = document.createElement('div');

    temp.appendChild(document.createElement('pre')).textContent = string;

    var s = temp.style;
    s.position = 'fixed';
    s.left = '-100%';

    document.body.appendChild(temp);
    document.getSelection().selectAllChildren(temp);

    var result = document.execCommand('copy');

    document.body.removeChild(temp);
    // true なら実行できている falseなら失敗か対応していないか
    return result;
}