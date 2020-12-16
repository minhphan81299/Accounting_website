$(document).ready(()=>{
    load_data();
    function load_data(query)
    {
        $.ajax({
        url:"showdb.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
        $('#output').html(data);
    }
    });
    }
    $('#search').keyup((e)=>{
        var query=$(e.target).val();
        if(query!=''){
            load_data(query);
        } else
        {
        load_data();
        }
    })
})