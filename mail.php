<html>
    <head></head>
    <body>
        <?php
            define("TO", "johnanthony.delpilar@gmail.com");

            $subject = "WEBSITE EMAIL RE: - ";
            $subject .= htmlspecialchars($_POST['subject']);

            $headers = "From: ";
            $headers .= htmlspecialchars($_POST['email']);

            $message = "";

            if (isset($_POST['requiredImmediateAttention'])) {
                $message .= "------------------------------------\n";
                $message .= "!!! REQUIRES IMMEDIATE ATTENTION !!!\n";
                $message .= "------------------------------------\n";
                $message .= "\n";
            }

            $message .= htmlspecialchars($_POST['message']);

            $message .= "\n";
            $message .= "\n";
            $message .= "------------------------------------\n";
            $message .= "Sent by: " . htmlspecialchars($_POST['name']) . "\n";
            $message .= "------------------------------------\n";
            
            echo "something";
            mail(TO, $subject, $message, $headers);
            echo "happened";

            header("Location: index.php");
            exit;

        ?>
    </body>
</html>
