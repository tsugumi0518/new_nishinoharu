$(function(){
    $("dt").on("click", function(){
      $(this).next().slideToggle();
      $(this).toggleClass("active");
    });

    // document.getElementById("yourButtonId").onclick = function() {
    //   window.print();
    // };

    // function hideOnPrint() {
    //   let button = document.getElementById('printButton');
    //   button.style.display = 'none';
    // }
  });