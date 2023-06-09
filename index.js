function submit() {
    document.getElementById("result").innerHTML = '';
    let count = $("#count").val();
    $.get("api.php", {
            count: count
        },
        function(data, status) {
            let json_data = JSON.stringify(data, null, '\t');
            document.getElementById("result").innerHTML = json_data;
        });
}