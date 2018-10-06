$('.btnLike').click(function () {
    var modelId = document.getElementById('model_id').value;
    $.ajax({
        url: '?r=projects/like&id=' + modelId,
        type: 'POST',
        data: {id: modelId},
        contentType: false,
        cache: false,
        processData: false,
        success: function (data)
        {
            document.getElementById('countLikes').innerHTML = data;
            document.getElementById('heart').className = 'fas fa-heart';
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
});