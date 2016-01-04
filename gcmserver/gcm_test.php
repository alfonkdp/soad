<html>
<head>
    <title>OMAPSLAB Cloud Message Terster</title>
</head>
<body>
    <div style="position:relative;margin:auto; width:300px; margin-top:30px;">
        <div><h4>OMAPSLAB Event Test Cloud Message</h4></div>
        <form method="get" action="prosess/gcm_send_message_prosess.php">
            <div>
                <label>Title</label><br>
                <input type="text"  name="title"/><br>
                
                <label>Desc</label><br>
                <textarea cols="30" rows="7"  name="desc"></textarea><br>
                
                <label>Date</label><br>
                <input type="date"  name="date" value="2015-12-22"/><br>
                
                <label>Lat</label><br>
                <input type="text"  name="lat" value="-6.9147444"/><br>
                
                <label>Long</label><br>
                <input type="text"  name="long" value="107.6098111"/><br>
                
                <br>
                <button type="submit">Send</button>
            </div>
        </form>
        <hr/>
        <a href="data/apk/koni-alpha-2.apk">Download APK KONI</a>
    </div>
</body>
</html>





