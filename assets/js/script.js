$(document).ready(function() {

  $('#submit').on('click', function(e){
    e.preventDefault();

    var valTextArea = $("#textarea").val();
    var valUserId   = $("input[name=userid]").val();

    console.log(valTextArea);
    /** AJAX */
    $.ajax({
      method  : "POST",
      url     : "comment-ajax.php",
      data    : { 
        comment_content : valTextArea,
        userid  : valUserId
      }, 
      /** KET: 
        di dalam object data ada key : value
        key ini nantinya akan menjadi alias yang akan pake oleh php. Misal : $_POST["comment_content"] 
        Isi dari object data ini bisa lebih dari 1 */

      success : function(data) {
        console.log(data);
      }
    });

  });


 
});