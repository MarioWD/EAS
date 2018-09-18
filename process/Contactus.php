<?php
$this->mail->IsSMTP();
$this->mail->SMTPSecure = "ssl";
$this->mail->SMTPAuth   = true;                  // enable SMTP authentication
$this->mail->Host       = "gator3241.hostgator.com"; // sets the SMTP server
$this->mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$this->mail->Username   = "admin@efficientaccountingservices.com"; // SMTP account username
$this->mail->Password   = "Admindragons93";
$this->mail->SetFrom("admin@efficientaccountingservices.com", "{$this->post["firstName"]} {$this->post["lastName"]}");
$this->mail->AddReplyTo($this->post["email"], "{$this->post["firstName"]} {$this->post["lastName"]}");
$this->mail->Subject = "Consultation request for {$this->post["firstName"]} {$this->post["lastName"]}";
$this->mail->Body = $this->post["message"];
if($_COOKIE["dev-env"])
{
  $this->mail->AddAddress("mhugocflores93@gmail.com");
}
else
{
  $this->mail->AddAddress("efficient.acc17@gmail.com");
}
if($this->mail->send())
{
  $this->setMsg("Message was sent successfully, we'll reply within 24 hours.", "success");
  header("location: /home/");
  exit();
}
?>
