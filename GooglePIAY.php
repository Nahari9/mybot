
<?php 

ob_start();

$API_KEY =' 5632422322:AAH_zk-uuEoadnf_U4mFtO28DOCdiIlscDU';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
##------@M_B_U-------##
##------@YQ_QT-------## 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$user = $update->message->from->username;
$last_name = $update->message->from->last_name;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$user_id = $update->message->from->user_id;
$time = time() + (979 * 11 + 1 + 30);
$username = $message->from->username;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
//(محمد)
$admin = "2103605352";
$fwd = $message->forward_from_chat->id;
$new_member = $update->message->new_chat_member; 
$left = $update->message->left_chat_member; 
$textmsg = $message->text;
$message_id = $message->message_id;
$rep = $message->reply_to_message; 
$rep_msg = $rep->message_id; 
$id_sudo = 2103605352;
$get = file_get_contents('file.txt');
$ex = explode("\n", $get);
$count = count($ex);
$type = $update->message->chat->type;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
//my ch :- YQ_QT
$re_msgid = $update->message->reply_to_message->message_id;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->message->message_id;
$id = $message->from->id;
$name = $update->message->from->first_name;
//dev:-mohamad
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
🛠- اهــــلا بــــك عزيــــزي في بوت كوكل بلي

🛠- البــــوت الآۆلْ علـّۓ. تلــــكرام

🛠- يمكنك تحــــميل اي برنــــامج

🛠- اكتب بحث+اسم البرنامج

⚠️- كمثال:- بحث هولا 

 
 ",

'reply_to_message_id'=>$message->$message_id,
]);
}
//mohamad//محمد
if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"*🎉- اهــــــلا عزيــــــزي

🛠- تـــم العثور علـّۓ. البرنامج بنجااح✅
〰〰〰〰〰〰〰〰〰〰〰〰
nahari$name

2103605352$from_id

@M_Ak_Nahari$username

*\n\n[💡- حسناا اضغط هناا لتحميل البرنامج✅]($rs)",]);}
$sudo = 2103605352;
$get = explode("\n", file_get_contents('memberbot.txt'));
if($text == '/start' and !in_array($chat_id, $get)){
file_put_contents('memberbot.txt',"\n" . $chat_id, FILE_APPEND);
}
if($text == '/users' and $id == $sudo){
 $count = count($get);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'text'=>"Your Bot Member : $count",
  ]);
  }
//my ch: - YQ_QT
$bc = explode("/bc", $text);
if($bc and $id == $sudo){
for($y=0;$y<count($get); $y++){
bot('sendMessage', [
'chat_id'=>$get[$y],
'text'=>"$bc[1]",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
}
##------dev/محمد------#
##------my/ch:-@YQ_QT------##