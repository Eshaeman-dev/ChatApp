<!DOCTYPE html>
<html>
<head>
    <title>My Chat</title>
</head>
<style type="text/css">
    @font-face {
        font-family: headFont;
        src: url('/MyChat/ui/fonts/Summer-Vibes-OTF.otf');
    }
    @font-face {
        font-family: myFont;
        src: url('/MyChat/ui/fonts/OpenSans-Regular.ttf');
    }

    #wrapper {
        max-width: 900px;
        min-height: 500px;
        display: flex;
        margin: auto;
        color: white;
        font-family: myFont;
    }

    #left_pannel {
        min-height: 500px;
        background-color: #27344b;
        flex: 1;
        text-align: center;
    }

    #Profile_image {
        width: 50%;
        border: solid thin white;
        border-radius: 50%;
        margin: 10px;
    }

    #left_pannel label {
        width: 100%;
        height: 30px;
        display: block;
        font-size: 13px;
        background-color: #404b56;
        border-bottom: solid thin #ffffff55;
        cursor: pointer;
        padding: 5px;
        transition: all 1s ease;
    }

    #left_pannel label:hover {
        background-color: #778593;
    }

    #left_pannel label img {
        float: right;
        width: 25px;
    }

    #right_pannel {
        min-height: 500px;
        background-color: #485b6c;
        flex: 4;
        text-align: center;
    }

    #header {
        background-color: #485b6c;
        height: 70px;
        font-size: 40px;
        text-align: center;
        font-family: headFont;
    }

    #inner_left_pannel {
        background-color: #383e48;
        flex: 1;
        min-height: 430px;
    }

    #inner_right_pannel {
        background-color: #f2f7f8;
        flex: 2;
        min-height: 430px;
        transition: all 2s ease;
    }

    #radio_contacts:checked ~ #inner_right_pannel {
        flex: 0;
    }
    #radio_settings:checked ~ #inner_right_pannel {
        flex: 0;
    }
    #label_chat input[type="radio"] {
        background-color: #27344b;
    }
</style>
<body>
<div id="wrapper">
    <div id="left_pannel">
        <div style="padding:10px;">
            <img id="Profile_image" src="/MyChat/ui/images/User1.jpeg" alt="No image found"><br>
            Esha Eman<br>
            <span style="font-size:12px; opacity:0.5;">eshaeman5421@gmail.com</span><br><br><br>
            <div>
                <label id="label_chat" for="radio_chat">Chat <img src="/ui/icons/chat.png" alt="Not found"></label>
                <label id="label_contacts" for="radio_contacts">Contacts<img src="/ui/icons/contacts.png" alt="Not found"></label>
                <label id="label_settings" for="radio_settings">Settings <img src="/ui/icons/settings.png" alt="Not found"></label>
            </div>
        </div>
    </div>
    <div id="right_pannel">
        <div id="header">Chat App</div>
        <div id="container" style="display:flex;">
            <div id="inner_left_pannel"></div>
            <input type="radio" id="radio_chat" name="myradio" style="display: none;">
            <input type="radio" id="radio_contacts" name="myradio" style="display: none;">
            <input type="radio" id="radio_settings" name="myradio" style="display: none;">
            <div id="inner_right_pannel"></div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    function _(element){
        return document.getElementById(element);
    }
    
   var label=_("label_chat");
   label.addEventListener("click",function(){
    var inner_pannel=_("inner_left_pannel");

    var ajax= new XMLHttpRequest();
    ajax.onload=function(){
        if(ajax.status==200 || ajax.readyState==4){
           inner_pannel.innerHTML=ajax.responseText;
        }
    }
    ajax.open("POST","file.php",true);
    ajax.send();
   });
</script>