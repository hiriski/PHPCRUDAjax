$(document).ready(function() {
  
  
  /** AJAX INSERT DATA */
  $('#submit').on('click', function(e){
    e.preventDefault();

    var valTextArea = $("#textarea").val();
    var valUserId   = $("input[name=userid]").val();

    $.ajax({
      method  : "POST",
      url     : "comment-ajax.php",
      data    : { 
        comment_content : valTextArea,
        userid          : valUserId,
        type            : "insert" // <<< ini hanya untuk membedakan ketika di eksekusi di comment-ajax.php
      }, 
      /** KET: 
        di dalam object data ada key : value
        key ini nantinya akan menjadi alias yang akan pake oleh php. Misal : $_POST["comment_content"] 
        Isi dari object data ini bisa lebih dari 1 */

      success : function(data) {
        $('#result').prepend(data);
      }
    });
  });


  /** AJAX DELETE */
  $('.delete').on('click', function() {
    commentBtnID = $(this).attr('data-id');
    
    /** Button Comment yang sudah di potong */
    btnCutStr    = commentBtnID.substring(12);
    
    $.ajax({
      method  : "POST",
      url     : "comment-ajax.php",
      data    : { 
        id    : commentBtnID,
        type  : "delete"
      },
      success : function(data) {
        $('#comment_'+btnCutStr).fadeOut();
      }
    })
  });

});