<?php

namespace App\Http\Controllers;

//use App\Mail\MailClass;
use Illuminate\Http\Request;
use App\Lead;
use App\Http\Requests\createLeadRequest;
use App\Main;
use Mail;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    use ValidatesRequests;

    /**
     * @param createLeadRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(createLeadRequest $request)
    {
      	$id = 0;
        $lead = new Lead();
        $lead->phone = $request->get('phone');
        $lead->name = $request->get('name');
        $lead->text = $request->get('massege');
		$lead->save();
		$id = $lead->id;
      
       $main = Main::find(1);
      if($main->leads_email != ""){

           $to = $main->leads_email;
           $name = $lead->name;
           $phone = $lead->phone;
           $text = $lead->text;

         // тема письма
          $subject = 'Заявка №'.$id;

          // текст письма
          $message = '
          <html>
          <head>
            <title>Новая Заявка</title>
         </head>
         <body>
            <p>Новая Заявка №'.$id.':</p>
            <table>
            <tr>
                <th>Имя - </th><th>'. $name .'</th>
              </tr>
             <tr>
                <th>Телефон - </th><th>'. $phone.'</th>
              </tr>
              <tr>
                <th>Текст сообщения - </th><th>'. $text.'</th>
              </tr>
           </table>
          </body>
          </html>
         ';

          // Для отправки HTML-письма должен быть установлен заголовок Content-type
         $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



          // Отправляем
          mail($to, $subject, $message,  $headers);


        }


        
      
        return redirect()->route('index');
    }

//    public function create2(createLeadRequest $request)
//    {
//       $id = 0;
//        $lead = new Lead();
//        $lead->phone = $request->get('phone');
//        $lead->name = $request->get('name');
//        $lead->text = $request->get('text');
//		$lead->save();
//		$id=$lead->id;
//
//       $main = Main::find(1);
//      if($main->leads_email != ""){
//
//           $to = $main->leads_email;
//           $name = $lead->name;
//           $phone = $lead->phone;
//           $text = $lead->text;
//
//          // тема письма
//          $subject = 'Заявка №'.$id;
//
//          // текст письма
//          $message = '
//          <html>
//          <head>
//            <title>Новая Заявка</title>
//          </head>
//          <body>
//            <p>Новая Заявка №'.$id.':</p>
//            <table>
//            <tr>
//                <th>Имя - </th><th>'. $name .'</th>
//              </tr>
//              <tr>
//                <th>Телефон - </th><th>'. $phone.'</th>
//              </tr>
//              <tr>
//                <th>Текст сообщения - </th><th>'. $text.'</th>
//              </tr>
//            </table>
//          </body>
//          </html>
//          ';
//
//          // Для отправки HTML-письма должен быть установлен заголовок Content-type
//          $headers  = 'MIME-Version: 1.0' . "\r\n";
//          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//
//
//
//          // Отправляем
//          mail($to, $subject, $message,  $headers);
//
//
//        }
//
//		    return redirect()->route('index');
//    }
}
