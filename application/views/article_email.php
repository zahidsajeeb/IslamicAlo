<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=3D"http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <style type="text/css">
         @media screen and (max-width: 600px) {
         .table {
         display: block;
         width: 100% !important;
         }
         .img {
         height: auto;
         max-width: 100% !important;
         }
         }
         body {
         width: 100% !important;
         max-width:600px;
         }
         body {
         -webkit-text-size-adjust: none; -ms-text-size-adjust: none;
         }
         body {
         background-color: #f3f3f3; margin: 0; padding: 0;
         align:center;
         margin-left:auto;
         margin-right:auto;
         }
      </style>
   </head>
   <body bgcolor="#f3f3f3">
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#f3f3f3" >
         <tbody>
            <tr>
               <td align="center">
                  <table width="100%" height="20px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5B9600">
                  </table>
               </td>
            </tr>
            <tr>
               <td align="center">
                  <table width="100%" border="0" align="center" cellpadding="20" cellspacing="0"  bgcolor="#E3E1E1">
                     <tbody>
                        <tr>
                           <td align="center" bgcolor="#ffffff">
                              <img src="http://abdsmd.com/images/logo.png" alt="Islamic Alo"  />
                           </td>
                        </tr>
                        <tr>
                           <td align="center">
                              <table width="100%" cellpadding="30" cellspacing="0" border="0">
                                 <tbody>
                                    <tr>
                                       <td width="90%" align="center">
                                          <table width="100%" cellpadding="20" cellspacing="0" border="0">
                                             <tbody>
                                                <tr>
                                                   <td height="20" align="center" >
                                                      <h3>Thank you for subscribing.</h3>
                                                      <hr>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td align="center">
                                                        <?php
                                                        if (file_exists("_images/article/" . $result->article_img)) {
                                                            ?>
                                                       <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $result->article_id; ?>"> <img class="img-fluid"  src="<?php echo base_url(); ?>_images/article/<?php echo $result->article_img; ?>" alt=""> </a>
                                                           <?php
                                                           
                                                        }
                                                        else {
                                                            ?>
                                                       <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $result->article_id; ?>">  <img class="img-fluid" style="height:158px; width:346px" src="<?php echo base_url(); ?>_images/article/no-image.png" alt=""> </a>
                                                           <?php 
                                                           
                                                        } 
                                                        ?>
                                                   </td>
                                                </tr>
                                                 
                                                 <tr>
                                                     <td align="justify">
                                                        <p> <?php echo $result->article_name; ?> </p>
                                                       
                                                       <p style="text-align:justify;"> <?php echo $result->article_details;?> </p>
                                                    </td>
                                                 </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td align="center">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                     <tbody>
                        <tr>
                           <td align="center">
                              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                                 <tbody>
                                    <tr>
                                       <td align="center" bgcolor="#4183D7"></td>
                                    </tr>
                                    <tr>
                                       <td align="center">
                                          <table width="100%" cellpadding="30" cellspacing="0" border="0" bgcolor="#ffffff" >
                                             <tbody>
                                                <tr>
                                                   <td height="50" align="center" bgcolor="#ffffff">
                                                      Copyright © 2018 <a href="https://islamicalo.com">Islamic Alo</a>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td  align="center">
                              <table align="center" width="100%" border="0" cellspacing="0"  cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td align="center" >
                                          <table align="center" width="100%" border="0"  cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td width="100%" align="center">
                                                      <table width="100%">
                                                         <tr>
                                                            <table cellpadding="0" cellspacing="0" bgcolor="#B9D3EC" width="100%" >
                                                               <tr>
                                                                  <td class="column" width="33%" >
                                                                     <table>
                                                                        <tr>
                                                                           <td >
                                                                              <ul>
                                                                                 <li ><a href="http://abdsmd.com/index.php/AlQuran">আল-কোরান</a></li>
                                                                                 <li><a href="http://abdsmd.com/index.php/AlHadis">আল-হাদিস</a></li>
                                                                                 <li><a href="http://abdsmd.com/index.php/Article">বাংলা আর্টিকেল</a></li>
                                                                                 <li><a href="https://sam.solutions/demo/services/ServerManagement">হাদিসের বই</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/SoftwareLicenses">বাংলা কুরআন </a></li>
                                                                              </ul>
                                                                           </td>
                                                                        </tr>
                                                                     </table>
                                                                  </td>
                                                                  <td class="column" width="33%">
                                                                     <table>
                                                                        <tr>
                                                                           <td>
                                                                              <ul>
                                                                                 <li><a href="https://sam.solutions/demo/services/EmailServer">আল-কুরানের তিলাওয়াত</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/DataCenterLocation">সহিহ গ্রন্থসমুহ</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/DDOSProtection">দু'আ ও জিকির</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/LoadBalancing">ডাউনলোড</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/SSLCertificate">জীবনী</a></li>
                                                                              </ul>
                                                                           </td>
                                                                        </tr>
                                                                     </table>
                                                                  </td>
                                                                  <td class="column" width="34%">
                                                                     <table>
                                                                        <tr>
                                                                           <td >
                                                                              <ul>
                                                                                 <li > <a href="https://sam.solutions/demo/services/EcommerceSolution">শায়েখ, মতিউর রহমান মাদানি</a></li>
                                                                                 <li > <a href="https://sam.solutions/demo/services/SoftwareDevelopment">কামালুদ্দিন জাফরী </a></li>
                                                                                 <li > <a href="https://sam.solutions/demo/services/AppDevelopment">মাঞ্জুর ই ইলাহী</a></li>
                                                                                 <li ><a href="https://sam.solutions/demo/services/WebHosting">সাইফুল্লাহ</a></li>
                                                                              </ul>
                                                                           </td>
                                                                        </tr>
                                                                     </table>
                                                                  </td>
                                                               </tr>
                                                            </table>
                                                         </tr>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align="center" height="20" bgcolor="#0350A1"></td>
                        </tr>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </body>