MultiMailer
===========

Yii extension for sending or saving emails with templates and attachments.

What it does
============

This extension allows to send emails with the help of PHPMailer class or to store emails in database (for example to send them later using Java workers).

The last version
================

This is the last version of Multimailer (excluding bug fixes).  

**This version does not include PHPMailer files because with the last critical issue being fixed I don't want to open your server to exploits with older versions.**  
Please get the latest version of PHPMailer at https://github.com/PHPMailer/PHPMailer and place all the folders and files in `MultiMailer/PHPMailer` folder.

I recommend switching to Yii 2.

Installation
============

Place the MultiMailer folder inside your Yii /protected/extensions directory.
Modify the main.php config file. For example:

    return array(
        'components' => array(
            'MultiMailer' => array(
                'class' => 'ext.MultiMailer.MultiMailer',
                'setFromAddress' => 'from@yourwebsite.com',
                'setFromName' => 'Your Website',
            ),
        ),
    );
  
This sets MultiMailer to send email using PHP mail() function with sender ```'Your Website <from@yourwebsite.com>'```.
You can find more configuration examples in *Examples* folder.

How to use it
=============

    $mailer = Yii::app()->MultiMailer->to('example@server.com', 'Recipient');
    $mailer->subject('Example email subject');
    $mailer->body('<h1>Hello</h1><p>This is test.<br>MultiMailer test.</p>');

    if ($mailer->send()) {
        // success
    }
    else {
        // error
        echo $mailer->getMultiError();
    }

You can chain the methods (except attachment() and attachments()) like:

    Yii::app()->MultiMailer->to('example@server.com', 'Recipient')->subject('Example email subject')->body('<h1>Hello</h1><p>This is test.<br>MultiMailer test.</p>')->send();

Special case: emails in database
================================

You can use MultiMailer to save email in database instead of sending it immediately. Email will be prepared using the PHPMailer as well.

First the configuration:

    return array(
        'components' => array(
            'MultiMailer' => array(
                'class' => 'ext.MultiMailer.MultiMailer',
                'setFromAddress' => 'from@yourwebsite.com',
                'setFromName' => 'Your Website',
                'setMethod' => 'DB',
                'setDbModel' => 'Email',
            ),
        ),
    );

You need to prepare the database table for email storage with Active Record model class ('Email' in the example above). Default table columns are ```'email'```, ```'name'```, ```'subject'```, ```'body'``` and ```'alt'```.

See the documentation for information about adding or switching the columns off.

The usage in this case is the same as before but remember that method send() will not *send* the email but will actually save it in the database.

Available sending methods
=========================

- mail()
- SMTP
- Gmail
- POP before SMTP
- Sendmail
- qmail

List of quick-start extension methods
=====================================

- attachment() - add an attachment (option: attachments() - add the list of attachments)
- bcc() - add a blind carbon copy recipient (options: bccs() - add the list of bcc recipients)
- body() - set the email body text (option: set the list of prameters for template here and use template() to add template)
- cc() - add a carbon copy recipient (option: ccs() - add the list of cc recipients)
- send() - send the email
- subject() - set the email subject
- to() - add a recipient (option: tos() - add the list of recipients)
