$(function(){
    function printPage() {
    let printWindow = window.open('', '_blank');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>印刷画面</title></head><body>');
    printWindow.document.write(document.getElementById('printArea').innerHTML);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.onload = function() {
        printWindow.print();
        printWindow.onafterprint = function() {
            printWindow.close();
                };
        };
}


// 現在の日付を取得
let date = new Date();

// 年月日を取得
let year = date.getFullYear();
let month = ('0' + (date.getMonth() + 1)).slice(-2);  // 月は0から始まるため+1する
let day = ('0' + date.getDate()).slice(-2);

// ランダムな5桁の数値を生成
let randomNum = Math.floor(10000 + Math.random() * 90000);

// 日付とランダムな数値を結合
let result = year + month + day + randomNum;

// 結果をtitleに表示
document.title = result;

});