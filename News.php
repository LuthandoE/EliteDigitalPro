<?php
ob_start();
require_once('config.php');
require_once('lue_error_handler.php');
require_once('Mail.php');
class News{
	
   private $mysqli;
   public function __construct(){
		
		$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		}
   public function __destruct(){
    
		$this->mysqli->close();
		}

    public function updateBank($userid, $bank_name, $acc_type, $acc_num){
        
        $userid = $this->mysqli->real_escape_string($userid);
        $bank_name = $this->mysqli->real_escape_string($bank_name);
        $acc_type = $this->mysqli->real_escape_string($acc_type);
        $acc_num = $this->mysqli->real_escape_string($acc_num);
        
        try{
            
        $query = "UPDATE account SET  bnk_name = '".$bank_name."', 
                   bankType  = '".$acc_type."' ,  
                   account_num = '".$acc_num."' WHERE userid = '".$userid."'";
        $res = $this->mysqli->query($query);
        if($res == TRUE){
            echo "<script>
                alert('Your account details have been updated succesfully');
            </script>";
        } else {
            echo "<script>
                alert('Something went wrong. Please try again');
            </script>";
        }
        } catch(exception $e){
            
        }
        
    } 
    public function updatePassCode($email, $code){
        
        $code = $this->mysqli->real_escape_string($code);
        $email = $this->mysqli->real_escape_string($email);
        
        $query = "UPDATE users SET pass_code = '".$code."' WHERE email = '".$email."'";
        $res = $this->mysqli->query($query);
         if($res == TRUE){
          // header("Location: pass_recovery.php?id='".$email."'");
           
            $to = $email;
            $subject = "Confirmation Code - Capribank";
                  
            $headers  = "Reply-To: Capribank <admin@capribank.com>\r\n"; 
                  $headers .= "Return-Path: Capribank <admin@capribank.com>\r\n"; 
                  $headers .= "From: Capribank - Confirmation Code <admin@capribank.com>\r\n";  
                  $headers .= "Organization: Capribank\r\n";
                  $headers .= "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                  $headers .= "X-Priority: 3\r\n";
                  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
                    
                    $message = '<html><body>';
                  $message .= '<img src="https://capribank.com/image/cpcLogo.png" width="18%" alt="Confirmaton Code:" />';
                    
                    $message.="<p>Password Reset Code! <br/>
                    <br/>
                       Use the following code to reset your password.</p>";
                       
                    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                    $message .= "<tr style='background: #eee;'><td><strong>Code:</strong> </td><td>" . strip_tags($code) . "</td></tr>";
                    $message .= "</table>";
                    $message .= "</body></html>";
                    mail($to, $subject, $message, $headers );
        } else {
            echo "<script>
                alert('Something went wrong. Please try again');
            </script>";
        }
    }
    public function approve($id,$adminID){
        
        $id = $this->mysqli->real_escape_string($id);
        $adminID = $this->mysqli->real_escape_string($adminID);
        try{
            
        $query = "UPDATE withdrawal
                SET status = 'Approved',
                adminID = '$adminID'
                WHERE wID IN ($id)";
        $res = $this->mysqli->query($query);
        
        if($res == TRUE){
            
            echo "<script>
             alert('The withdrawal request has been approved');
            </script>";
            //header("Location: admin.php");
            header("Location: Manager.php");
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
            
        } catch(exception $e){
           echo "<script>alert('Something went wrong. Please try again');</script>";  
        }
        
        
    }
    public function approveDeposit($id,$adminID){
        
        $id = $this->mysqli->real_escape_string($id);
        $adminID = $this->mysqli->real_escape_string($adminID);
        try{
            
        $query = "UPDATE deposit
                SET confirmation = 'Received',
                adminID = '$adminID'
                WHERE depID IN ($id)";
        $res = $this->mysqli->query($query);
        
        if($res == TRUE){
            
            echo "<script>
             alert('The deposit request has been approved');
            </script>";
            //header("Location: admin.php");
            header("Location: Manager.php");
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
            
        } catch(exception $e){
           echo "<script>alert('Something went wrong. Please try again');</script>";  
        }
        
        
    }
     public function declineDeposit($id,$adminID){
        
        $id = $this->mysqli->real_escape_string($id);
        $adminID = $this->mysqli->real_escape_string($adminID);
        try{
            
        $query = "UPDATE deposit
                SET confirmation = 'Not Received',
                adminID = '$adminID'
                WHERE depID IN ($id)";
        $res = $this->mysqli->query($query);
        
        if($res == TRUE){
            
            echo "<script>
             alert('The deposit request has been declined');
            </script>";
            //header("Location: admin.php");
            header("Location: Manager.php");
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
            
        } catch(exception $e){
           echo "<script>alert('Something went wrong. Please try again');</script>";  
        }
        
        
    }
    public function approvedDeposit($id,$adminID){
        
        $id = $this->mysqli->real_escape_string($id);
        $adminID = $this->mysqli->real_escape_string($adminID);
        try{
            
        $query = "UPDATE deposit
                SET status = 'Approved',
                adminID = '$adminID'
                WHERE wID IN ($id)";
        $res = $this->mysqli->query($query);
        
        if($res == TRUE){
            
            echo "<script>
             alert('The withdrawal request has been approved');
            </script>";
            //header("Location: admin.php");
            header("Location: Manager.php");
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
            
        } catch(exception $e){
           echo "<script>alert('Something went wrong. Please try again');</script>";  
        }
    }
    
    public function Decline($id,$adminID){
       
        $id = $this->mysqli->real_escape_string($id);
        $adminID = $this->mysqli->real_escape_string($adminID);
       
        try{
            
        $query = "UPDATE withdrawal
                SET status = 'Declined',
                adminID = '$adminID'
                WHERE wID IN ($id)";
        $res = $this->mysqli->query($query);
        
        if($res == TRUE){
            
            echo "<script>
             alert('The withdrawal request has been declined');
            </script>";
            //header("Location: admin.php");
            header("Location: Manager.php");
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
            
        } catch(Exception $e){
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
    }
    public function cashout($id,$amount){
        
        $id = $this ->mysqli->real_escape_string($id);
        $amount = $this ->mysqli->real_escape_string($amount);
        
        try{
            $query = "UPDATE deposit
                SET cashout = cashout + $amount 
                WHERE depID IN ($id)";
        $this->mysqli->query($query);
        } catch(Exception $e){
             echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
        
    }
     public function updateDepStatus($id){
        $id = $this ->mysqli->real_escape_string($id);
        
        try{
            
           $query = "UPDATE deposit
                SET status = 'Inactive' 
                WHERE depID IN ($id)";
           $this->mysqli->query($query);
        
        } catch(exception $e){
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
    }
   	public function getCashout($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		try{
		  $query = "SELECT cashout FROM deposit WHERE depID='$id'";
          $res = $this->mysqli->query($query);
          $cat = "";
            while($row = mysqli_fetch_array($res)){
                $cat = $row['cashout'];
            }
    		return $cat;
		} catch(exception $e){
		   echo "<script>alert('Something went wrong. Please try again');</script>";
		}
	} 
	public function pCode($email){
	   
	    $email = $this ->mysqli->real_escape_string($email);
		try{
		  $query = "SELECT pass_code FROM users WHERE email='$email'";
          $res = $this->mysqli->query($query);
          $cat = "";
            while($row = mysqli_fetch_array($res)){
                $cat = $row['pass_code'];
            }
    		return $cat;
		} catch(exception $e){
		   echo "<script>alert('Something went wrong. Please try again');</script>";
		}
	}
  
   	public function getPhone($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		try{
		    $query = "SELECT phone FROM users WHERE userid='$id'";
            $res = $this->mysqli->query($query);
            $cat = "";
            while($row = mysqli_fetch_array($res)){
                $cat = $row['phone'];
            }
    		return $cat;
		} catch(exception $e){
		    echo "<script>alert('Something went wrong. Please try again');</script>";
		}
	} 
	public function getEmail($id){
	    
	    $id = $this ->mysqli->real_escape_string($id);
        
		try{
		    $query = "SELECT email FROM users WHERE userid='$id'";
            $res = $this->mysqli->query($query);
            $cat = "";
            while($row = mysqli_fetch_array($res)){
                $cat = $row['email'];
            }
    		return $cat;
		} catch(exception $e){
		
            echo "<script>alert('Something went wrong. Please try again');</script>";
		}
	}
	public function CountUsers(){
        
            $query = "SELECT  * FROM users";
            $result = $this->mysqli->query($query);
           // $count = mysql_num_rows() 
            return $result;
    
    }
    public function CountUsersCurr(){
        
            $query = "SELECT  * FROM users WHERE created_on = NOW()";
            $result = $this->mysqli->query($query);
           // $count = mysql_num_rows() 
            return $result;
    
    }
	public function UserID($id){
	    
	    $id = $this ->mysqli->real_escape_string($id);
		try{
		    $query = "SELECT userid FROM account WHERE accID ='$id'";
            $res = $this->mysqli->query($query);
            
            while($row = mysqli_fetch_array($res)){
                $cat = $row['userid'];
            }
    		return $cat;
		} catch(Exception $e){
		  echo "<script>alert('Something went wrong. Please try again');</script>";
		}
	}
	public function editCat($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		$query = "SELECT location FROM city WHERE pid='$id'";
        $res = $this->mysqli->query($query);
        
        while($row = mysqli_fetch_array($res)){
            $cat = $row['location'];
        }
		return $cat;
	} 
   	public function getCo($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		$query = "SELECT country FROM city WHERE pid='$id'";
        $res = $this->mysqli->query($query);
        try{
            if($res !== false){
            
            while($row = mysqli_fetch_array($res)){
            $cat = $row['country'];
            
            return $cat;
          }
        } else {
            throw new Exception("Something went wrong"); 
        }
        } catch(exception $e){
           echo "<script>alert('$e.getMessage();');</script>";
        }
      
        
		
	}    
    public function getLocationID($location){
        
        $location = $this ->mysqli->real_escape_string($location);
		try{
		    $query = "SELECT pid FROM city WHERE location ='$location'";
            $res = $this->mysqli->query($query);
            
            while($row = mysqli_fetch_array($res)){
               $pid = $row['pid'];
            }
    		return $pid;
    		} catch(Exception $e){
    		  
		    echo "<script>alert('Something went wrong. Please try again');</script>";
		}
    }
    public function userName($id){
        
        $id = $this ->mysqli->real_escape_string($id);
		$query = "SELECT name FROM users WHERE userid ='$id'";
        try{
           
            $res = $this->mysqli->query($query);
            while($row = mysqli_fetch_array($res)){
           
            $name = $row['name'];
         }
	    	return $name; 
       
        } catch(Exception $e) {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    }
    
   
    public function updatePass($username, $pass){
        
        $pass = $this->mysqli->real_escape_string($pass);
        $username = $this->mysqli->real_escape_string($username);

        try{
            $query = "UPDATE users SET pass = '$pass'
                    WHERE email = '$username'";
        $res = $this->mysqli->query($query);
        if($res == TRUE){
            echo "<script>
               alert('Your password has been updated succesfully.');
            </script>";
        } else {
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
        } catch(Exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        
        }
    }
    public function updatePayProof($accID, $image){
        
        $accID = $this->mysqli->real_escape_string($accID);
        $image = $this ->mysqli->real_escape_string($image);

        try{
            
            $tmp_dir = $_FILES['image']['tmp_name'];
    		$imgSize = $_FILES['image']['size'];
            
            $upload_dir = '../capri_admin/Payments/'; // upload directory
    	
    	    $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION));
    	    // get image extension
    		
    		// valid image extensions
    		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    		
    		// rename uploading image
    		$image = rand(1000,1000000).".".$imgExt;
     	    // allow valid image file formats
    		if(in_array($imgExt, $valid_extensions)){			
    				// Check file size '5MB'
    				if(($imgSize < 5000000) && (!empty($image)))				{
    					move_uploaded_file($tmp_dir,$upload_dir.$image);
    				}
    				else{
    					echo  "<script>alert('Sorry, your file is too large.')</script>";
    				}
    			}
    			else{
    				echo  "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";		
    			}
            
            
            $query = "UPDATE deposit SET proof_of_payment = '$image'
                    WHERE accID = '$accID' AND proof_of_payment IS NULL";
        $res = $this->mysqli->query($query);
        if($res == TRUE){
            echo "<script>
               alert('Your proof of payment has been sent succesfully.');
            </script>";
        } else {
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
        } catch(Exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        
        }
    }
    public function AdminPass($username, $pass){
        
        $pass = $this->mysqli->real_escape_string($pass);
        $username = $this->mysqli->real_escape_string($username);

      try{
        
        $query = "UPDATE admin SET pass = '$pass'
                    WHERE email = '$username'";
        $res = $this->mysqli->query($query);
        if($res == TRUE){
            echo "<script>
               alert('Your password has been updated succesfully.');
            </script>";
        } else {
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
      } catch (exception $e){
         echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
      }
    }
	public function getDepDate($id){
	   
        $id = $this ->mysqli->real_escape_string($id);
		try{
		  
          $query = "SELECT dep_date FROM deposit WHERE depID='$id'";
          $res = $this->mysqli->query($query);
        
          while($row = mysqli_fetch_array($res)){
          $cat = $row['dep_date'];
        }
		return $cat;
		} catch(Exception $e){
		   
           echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
           
		}
	}
	public function getPaymentMethod($id){
	   
        $id = $this ->mysqli->real_escape_string($id);
	
        try{
    	    $query = "SELECT pmethod FROM deposit WHERE depID='$id'";
            $res = $this->mysqli->query($query);
            
            while($row = mysqli_fetch_array($res)){
                $cat = $row['pmethod'];
            }
    		return $cat;
            
	    } catch(Exception $e){
	        
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
	    }
	}

	public function getPeriod($id){
	   
        $id = $this ->mysqli->real_escape_string($id);
	
        try{
    	    $query = "SELECT period FROM deposit WHERE depID='$id'";
            $res = $this->mysqli->query($query);
            
            while($row = mysqli_fetch_array($res)){
                $cat = $row['period'];
            }
    		return $cat;
            
	    } catch(Exception $e){
	        
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
	    }
	}
    public function getUserID($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        try{
            
            $query = "SELECT * FROM users WHERE userid=$id";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch(Exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
    }
    public function getAdminID($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        try{
            $query = "SELECT * FROM admin WHERE adminID=$id";
            $result = $this->mysqli->query($query);
            return $result;
        } catch (exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
    }
    public function getUsername($username){
        
        $username = $this ->mysqli->real_escape_string($username);
        try{
            $query = "SELECT userid, email, pass FROM users WHERE email = '$username'";
            $result = $this->mysqli->query($query);
            return $result;
        } catch(Exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
        
    }
    public function getPaymentProof($accID){
        
        $accID = $this ->mysqli->real_escape_string($accID);
        
        try{
            $query = "SELECT * FROM deposit WHERE accID = '$accID' AND confirmation = 'Not Confirmed' AND proof_of_payment IS NULL";
            
            $result = $this->mysqli->query($query);
            return $result;
        } catch(Exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
        
    }
    
    //Add deposit
    public function addDeposit($amount,$period,$pMethod, $accID, $email){
        
        $amount = $this->mysqli->real_escape_string($amount);
        $period = $this->mysqli->real_escape_string($period);
        $pMethod = $this->mysqli->real_escape_string($pMethod);
        $accID = $this->mysqli->real_escape_string($accID);
        $email = $this->mysqli->real_escape_string($email);
        
        $query = "INSERT INTO deposit( dep_date, amount, period, pmethod, accID) 
        VALUES (NOW(),'".$amount."','".$period."','".$pMethod."','".$accID."')";
        
        $result = $this->mysqli->query($query);
       
        if($result){
           
           $depID = $this->mysqli->insert_id;
           
           
             /*              
                $from = "Capribank <admin@capribank.com>";
                $to = $email;
                
                $subject = "Capri Bank Investment - Deposit Notification";
                
               $message = '<html><body>';
                    $message .= '<img src="https://capribank.com/image/cpcLogo.png" width="18%" alt="Your Login Details:" />';
                    
                    $message.="<p>Your investment request has been recieved! <br/>
                    <br/>
                       Use $depID as a reference for your deposit.</p>";
                    $message .= " 
                       Click the link below to login to your account: <br/> 
                       
                     <a href='www.capribank.com/admin.php'> Login here</a>";
                    $message .= "</body></html>"; 
                    
               // $body = "Hi,\n\nHow are you?";
                $host = "ssl://mail.capribank.com";
                $port = "465";
                $username = "admin@capribank.com";
                $password = "ld21202494";
                $headers = array ('From' => $from,
                  'To' => $to,
                  'Subject' => $subject);
                $smtp = Mail::factory('smtp',
                  array ('host' => $host,
                    'port' => $port,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));
                $mail = $smtp->send($to, $headers, $message);
                if (PEAR::isError($mail)) {
                  echo("<p>" . $mail->getMessage() . "</p>");
                 } else {
                 // echo("<p>Message successfully sent!</p>");
                  header("Location: deposit_success.php?id=$pMethod&Did=$depID");
           
                 }
           */
           
                  $to = $email;
                  $subject = "Capri Bank Investment - Deposit Notification";
                  $headers  = "Reply-To: Capribank <admin@capribank.com>\r\n"; 
                  $headers .= "Return-Path: Capribank <admin@capribank.com>\r\n"; 
                  $headers .= "From: Capribank - Investment Deposit <admin@capribank.com>\r\n";  
                  $headers .= "Organization: Capribank\r\n";
                  $headers .= "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                  $headers .= "X-Priority: 3\r\n";
                  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
                    
                  $message = '<html><body>';
                  $message .= '<img src="https://capribank.com/image/cpcLogo.png" width="18%" alt="Your Login Details:" />';
                    
                  $message.="<p>Your investment request has been recieved! <br/>
                    <br/>
                       Use $depID as a reference for your deposit.</p>";
                  $message .= " 
                       Click the link below to login to your account: <br/> 
                       
                     <a href='www.capribank.com/admin.php'> Login here</a>";
                  $message .= "</body></html>";
                    mail($to, $subject, $message, $headers );
                  
                  header("Location: deposit_success.php?id=$pMethod&Did=$depID");
           
        } else {
       
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";  
       
        }
        
    }
    public function AdminUsername($username){
        
        $username = $this ->mysqli->real_escape_string($username);
        try{
            $query = "SELECT adminID, email, pass FROM admin WHERE email = '$username'";
            $result = $this->mysqli->query($query);
            return $result;
        } catch (Exception $e){
             echo "<script>
                      alert('Something went wrong please try again!');
                  </script>";
        }
        
    }
   
	//Populating dropdown sub faq
	public function GetCity(){
		try{
		  $query = "SELECT location FROM city 
                  ORDER BY location ";
		  $result = $this->mysqli->query($query);
          return $result;
		} catch(exception $e) {
		   echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
		}
		
		}
        
 	public function getLocation($pid){
 	  
       $pid = $this->mysqli->real_escape_string($pid);
       try{
      	    $query = "SELECT location FROM city 
                  WHERE pid = '$pid'";
       	
            $result = $this->mysqli->query($query);

            while($row = mysqli_fetch_array($result)){
                $pid = $row['location'];
            }
    		return $pid;
       } catch(exception $e){
          echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
       }
    
  }
  	public function accID($id){
	    
        $id = $this->mysqli->real_escape_string($id);
        try{
              $query = "SELECT accID FROM account 
                  WHERE userid = '$id'";
       	
        $result = $this->mysqli->query($query);
        
        while($row = mysqli_fetch_array($result)){
            $pid = $row['accID'];
        }
		return $pid;
            
        } catch(exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
      
  }
 public function adminName($id){
	    
        $id = $this->mysqli->real_escape_string($id);
        try{
              $query = "SELECT name FROM admin 
                  WHERE adminID = '$id'";
       	
        $result = $this->mysqli->query($query);
        
        while($row = mysqli_fetch_array($result)){
            $pid = $row['name'];
        }
		return $pid;
            
        } catch(exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
      
  }
  
	public function getSubID($id){  
		
        $id = $this ->mysqli->real_escape_string($id);
		try{
		  $q = "SELECT pid FROM city WHERE location ='$id'";
        $result = $this->mysqli->query($q);
        $pid ="";
        while($row = mysqli_fetch_array($result)){
            $pid = $row['pid'];
        }
		return $pid;
		} catch(exception $e){
		    echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
		}
	}
    
    //Getting a sub faq id 
	public function getBal($id){  
		$id = $this ->mysqli->real_escape_string($id);
		try{
		  $q = "SELECT amount FROM deposit WHERE depID ='$id'";
            $result = $this->mysqli->query($q);
    
            while($row = mysqli_fetch_array($result)){
                $pid = $row['amount'];
            }
    		return $pid;
  		 } catch(exception $e){
  		    echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
  		 }
	}
    public function addMessage($accID, $desc){
        
        $accID = $this ->mysqli->real_escape_string($accID);
        $desc = $this ->mysqli->real_escape_string($desc);
        
        try{
            $query = "INSERT INTO message( description, accID, created_on) VALUES ('".$desc."','".$accID."',NOW())";
            $res = $this->mysqli->query($query);
            
            if($res==TRUE){
               // echo "<script> alert('Message has been sent to the investor'); </script>";
            } else {
                 
                 echo "<script> alert('Something went wrong.".$this->mysqli->error."'); </script>";
            }
        } catch(exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
    
    }
    public function getMsg($acc_id){
        
        $acc_id = $this->mysqli->real_escape_string($acc_id);
        try{
            $query = "SELECT * FROM message
                WHERE accID = $acc_id 
                ORDER BY created_on DESC LIMIT 200";
        
            $RES = $this->mysqli->query($query);
            return $RES;
        } catch(exception $e){
            echo "<script> alert('Something went wrong.".$this->mysqli->error."'); </script>";
        }
    }
    public function delAll($accID){
        
        $accID = $this->mysqli->real_escape_string($accID);
        
        try {
         
            $del = "DELETE * FROM messages WHERE accID = $accID";
            $result = $this->mysqli->query($del); 
            return $result;   
          } catch(exception $e){
            echo "<script> alert('Something went wrong'); </script>";
        }
    }
    public function updateSelected($mid){

        $mid = $this->mysqli->real_escape_string($mid);
        try{
            
            $query = "UPDATE message SET isSelected = 1 
                  WHERE mID = $mid";
            $this->mysqli->query($query);
        } catch(exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
    }
     public function userMsg($mid){
        
        $mid = $this->mysqli->real_escape_string($mid);
        try{
            $query = "SELECT * FROM message 
                  WHERE mID = $mid";
        
            $RES = $this->mysqli->query($query);
            return $RES;
            
        } catch(Exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
    }
    public function CountMsg($accID){
        
        $accID = $this->mysqli->real_escape_string($accID);
        try{
            $query = "SELECT description FROM message WHERE accID = $accID AND isSelected = 0";
       
            $res = $this->mysqli->query($query);
            return $res;
        } catch(exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";
        }
        
    }
    public function getUsers(){
        
        $query = "SELECT * FROM users
                    ORDER BY name ASC";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    
    public function selectProfile($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        try{
            $query = "SELECT users.userid, users.email, users.name, users.surname,
                        users.picture, users.address, users.created_on, users.phone, account.accID, 
                        account.bnk_name,account.bankType, account.account_num
                                            
                      FROM users INNER JOIN account ON users.userid = account.userid 
                      WHERE users.userid = $id";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch(exception $e){
           echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
    }
    public function getDonation(){
      
      try{
        $query = "SELECT * FROM deposit
                  WHERE status = 'active' AND confirmation = 'Not Confirmed'
                  ORDER BY dep_date DESC
                  LIMIT 50";
        $result = $this->mysqli->query($query);
        return $result;
        
      } catch(exception $e){
        echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
      }
        
    }
    public function getDonationLogin($id){
      
      try{
        $query = "SELECT * FROM deposit
                  WHERE status = 'active' AND confirmation = 'Not Confirmed' AND accID = $id
                  ORDER BY dep_date DESC
                  LIMIT 50";
        $result = $this->mysqli->query($query);
        return $result;
        
      } catch(exception $e){
        echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
      }
        
    }
     public function getDonationDate(){
       
       try{
        
         $query = "SELECT * FROM deposit
                  WHERE dep_date = NOW() 
                  LIMIT 50";
        $result = $this->mysqli->query($query);
        return $result;
        
       } catch(exception $e){
         echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";   
       }
       
        
    }
     public function getSubCategories1(){
      
        try{
             $query = "SELECT * FROM category_item WHERE catID=1";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
     public function getSubCategories2(){
      
        try{
             $query = "SELECT * FROM category_item WHERE catID=3";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function getSubCategories3(){
      
        try{
             $query = "SELECT * FROM category_item WHERE catID=2";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
       public function getSubCategories4(){
      
        try{
             $query = "SELECT * FROM category_item WHERE catID > 3";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function UserInvesSearchRes($id){
        $id = $this ->mysqli->real_escape_string($id);
      
        try{
             $query = "SELECT * FROM deposit
                  WHERE accID = ".$id."
                  ORDER BY dep_date DESC";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function deleteMsg($mid){

        $mid = $this->mysqli->real_escape_string($mid);
        try{
            $query = "DELETE FROM message WHERE mID = $mid";
        
            $res = $this->mysqli->query($query);
        
            return $res;
            
        } catch(exception $e){
            echo "<script> alert('Something went wrong!');</script>";
        }
        
    }
    public function ActiveUserDonation($id){
        $id = $this ->mysqli->real_escape_string($id);
      
        try{
             $query = "SELECT * FROM deposit
                  WHERE accID = $id AND status = 'active' AND confirmation = 'Received' 
                  ORDER BY dep_date DESC";
             $result = $this->mysqli->query($query);
             return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function getAllDonations(){
       // $id = $this ->mysqli->real_escape_string($id);
        try{
            
            $query = "SELECT * FROM deposit WHERE status= 'active'
            AND confirmation = 'Received'
            ";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch(exception $e){
            
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function getWT(){
        
        try{
            
            $query = "SELECT * FROM withdrawal WHERE status = 'waiting for approval'
                     ORDER BY wid_date DESC	
                  LIMIT 50";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
     public function getWDate(){
        
        try{
            $query = "SELECT * FROM withdrawal WHERE wid_date = NOW()	
                  LIMIT 50";
            $result = $this->mysqli->query($query);
            return $result;
        } catch (exception $e){
           echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";  
        }
        
    }
    public function getWiT($id){
        
        $id = $this->mysqli->real_escape_string($id); 
        
        try{
            
            $query = "SELECT * FROM withdrawal WHERE status = 'waiting for approval' AND depID = $id;	
                  LIMIT 20";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch (exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>";  
        }
        
    }
    public function getAllWt(){
        
        try{
            $query = "SELECT * FROM withdrawal WHERE status = 'waiting for approval'";
            $result = $this->mysqli->query($query);
            return $result;
            
        } catch(exception $e){
            
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function getAllW($accID){
        
        $accID = $this ->mysqli->real_escape_string($accID);
        
        try{
            $query = "SELECT * FROM withdrawal WHERE accID = $accID";
            $result = $this->mysqli->query($query);
            return $result;
        } catch (exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function checkDepID($id){
        $id = $this ->mysqli->real_escape_string($id);
        
        try{
            $query = "SELECT  depID FROM withdrawal WHERE depID = $id and status = 'waiting for approval'";
            $res = $this->mysqli->query($query);
            return $res;
        } catch (exception $e){
             echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
    }
    public function WithdrawalRes($amount, $accID, $depID){
        
        $amount = $this->mysqli->real_escape_string($amount);
        $accID = $this->mysqli->real_escape_string($accID);
        $depID = $this->mysqli->real_escape_string($depID);
        
        try{
            $query = "INSERT INTO withdrawal(wid_date, wid_amount, accID, depID)
           VALUES (NOW(),'".$amount."','".$accID."','".$depID."')";
        
        $res = $this->mysqli->query($query);
        if($res){
            echo "<script>
                     alert('Your requested has ben sent. It will be reviewed in 3 days');
                 </script>";
        } else {
            echo "<script>
                     alert('Something went wrong.Please try again');
                 </script>";
        }
        } catch(exception $e){
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
    }
  /*  public function updateAmount($id,$amount){
        $id = $this ->mysqli->real_escape_string($id);
        $amount = $this ->mysqli->real_escape_string($amount);
        $query = "CREATE EVENT amountUpdate
                  ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR DO
                  UPDATE deposit 
                  SET roi = roi + (2/100 * $amount)
                  WHERE accID = $id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    */
    public function getWithdrawal($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        
        try{
        
            $query = "SELECT account.userid, deposit.depID, deposit.dep_date,
                 deposit.amount, deposit.roi, deposit.period, deposit.accID,deposit.status
                                        
                  FROM account INNER JOIN deposit ON deposit.accID = account.accID 
                  WHERE account.userid = $id LIMIT 100";
            $result = $this->mysqli->query($query);
            return $result;
        
        } catch(exception $e){
        
            echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
        }
        
        
    }
    public function addAccount($userid,$bank_name,$acc_type,$acc_num,$branch_code){
        
        $bank = $this ->mysqli->real_escape_string($bank_name);
        $acc_holder = $this ->mysqli->real_escape_string($acc_type);
        $acc_num = $this ->mysqli->real_escape_string($acc_num);
        $branch_code = $this ->mysqli->real_escape_string($branch_code);
        $userid = $this->mysqli->real_escape_string($userid);
        
        $query = "INSERT INTO `account`( `bnk_name`, `bankType`, `userid`, `account_num`, `branch_code`) 
        VALUES ('".$bank_name."','".$acc_type."','".$userid."','".$acc_num."','".$branch_code."')";
        
        $res = $this->mysqli->query($query);
        if($res == TRUE){
            
        } else {
            echo "<script>
                    alert('Something is wrong with your banking details please try again!');
                  </script>"; 
        }
    }
    
   public function getUser($userid){
    
      $userid = $this ->mysqli->real_escape_string($userid);
      
      try{
          $query = "SELECT name, surname, 
                picture ,created_on, users.address
                FROM users
                WHERE userid=". $userid;
      
          $result = $this->mysqli->query($query);
          return $result;
          
      } catch(exception $e) {
        
        echo "<script>
                    alert('Something went wrong please try again!');
                  </script>"; 
      }
     
   }
    /*public function getAdmin($adID){
    
      $query = "SELECT * FROM admin
                WHERE adminID =". $adID;
      
      $result = $this->mysqli->query($query);
      return $result;
     
   } */
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
   
function humanTiming ($time){

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}
function dayCount($from, $to) {
    $first_date = strtotime($from);
    $second_date = strtotime($to);
    $offset = $second_date-$first_date; 
    return floor($offset/60/60/24);
}
    
}
ob_end_flush();
?>