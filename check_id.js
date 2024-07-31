$(document).ready(function(){
    $('#check_id').click(function(){
        var uid = $('#userid').val();
        if (uid.length < 4){
            alert("아이디를 4글자 이상 입력해주세요.");
            return false;
        }
        $.ajax({url: "check_id.php", data : {userid:uid}, method: "POST",
            success:function(data){
                if(data > 0) alert ('중복된 아이디입니다.')
                else {
                    alert("사용 가능한 아이디입니다.")
                    $('#ok').val(1)
                }
            }
        })
    })
    $('#userid').change(function(){
        $('#ok').val(0);
    })
    window.ck = function(f){
        if($('#ok').val() != 1){
            alert("아이디 중복확인을 해주세요");
            return false;
        }
})