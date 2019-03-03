<html>
<head>
<title>Feedback form</title>
</head>
<body>
<link rel="stylesheet" href="form.css" >
<div class="feedback.jpg"></div>
<div class="row " style="margin-top: 50px">
    <div class="col-md-6 col-md-offset-3 form-container">
        <h2>Feedback</h2>
        <p>
            Please provide your feedback below:
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row">
                <div class="col-sm-12 form-group">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your feedback successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>
    </div>
</div>

<script>
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });


                    $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json'
            });

      });
});
</script>

<input type="email" class="form-control" id="email" name="email" required>

<textarea  name="Message"  maxlength="6000" required></textarea>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './give_feedback.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('comments')->maxLength(6000);




$pp->sendEmailTo('sowmya.ruby7@gmail.com'); // ← Your email here

echo $pp->process($_POST);

$fh->sendEmailTo(['sowmya.ruby7@gmail.com']);

?>
</body>
</html>