<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>    

    <title>ARForms PDFcreator</title>

    <preview>images/template1.png</preview>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="<?php echo ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css';?>" type="text/css" />

    <style type="text/css">
      h3{
        text-align: center;
        font-size: 30px;
      }
      p{
        font-size: 20px;
        line-height: 35px;
      }
      .text-center{
        text-align: center;
      }
      .page_title{ text-align: center; width: 100%; font-weight: 700; padding-top: 75px; font-size: 22px;}
      .page_sub_title { text-align: center; font-size: 20px; margin-top: 60px; }
      .user_value{
        border-bottom: 2px dotted #000;
        width: 400px;
        font-size: 17px;
        text-align: center;
        margin: 30px auto 0 auto;
      }
      .date, .signature{
        display: inline-block;
        width: 200px;
      }
      .dotted{
        border-bottom: 2px dotted #000;
      }
      .signature{
        margin-left: 300px;
      }
      .box{
        border: 7px solid #c3c3c3;
        padding: 3px;
        font-size: 0;
      }
      .page_two_wrapper { margin-left: 40px; margin-right: -28px; }
      .page_three_wrapper { margin-left: 40px; margin-right: -28px; }
      h3{
        font-size: 20px;
      }
      .arf_listing { list-style: none; padding-left: 3px; margin-top: 0; padding-top: 0; font-size: 10px;}
      .address{
        border: 2px solid #000;
        width: 260px;
        padding: 30px;
        font-size: 18px;
        
      }
      .page2_address{ width: 240px; padding: 30px;}
      .inner-box{
        border: 1px solid #000;
        display: inline-block;
        margin: 0;
        padding: 0;
        padding-top: -7px;
        padding-left: 2px;
      }
      .box-row .inner-box:not(:first-child){
        margin-left: -1px;
      }
      .arf_sign_section .inner-box {
        height: 62px;
      }
      .box-title{
        padding: 0;
        margin-top:7px ;
        font-size: 10px;
      }
      .box-value{
        margin: 0;
        margin-top: 7px;
        font-size: 12px;
      }
      #page3 .box-value{ margin-top: 2px; }
      strong{
        font-size: 15px;
        display: block;
        margin-top: 20px;
      }
      p{
        font-size: 15px;
      }
      .info{
        width: 300px;
        font-weight: bolder;
        float: right;
        margin-top: 30px;
        margin-right: 5px;
        border: 1px solid #000;
        padding: 6px;
      }
      .info #ptag{
        margin-top: -10px;
        padding-top: 0;
        font-weight: bolder;
        font-size: 13px;
      }
      #page1{ min-height: 297px; }

      .checkimg{font-size: 12px;}

    </style>

</head>
    <?php /*
    <body>
       <div class="arf_pdf_container">    	
            <div class="arf_field_values">
            	<table class="form-table">
                [ARF_LOOP]
                    <tr class="arf_pdf_viewentry_row {ARF_IF [VAR MOD 2==0]} two_row_even {/ARF_IF} {ARF_IF [VAR MOD 2==1]} two_row_odd {/ARF_IF}">
                        <td class="arf_pdf_viewentry_left">&nbsp;[ARF_GetLabel:VAR]</td>
                        <td class="arf_pdf_viewentry_right">&nbsp;[ARF_GetValue:VAR]</td>
                    </tr>
                [/ARF_LOOP]
                </table>
            </div>
        </div>
        [ARF_Signature]Powered by ARForms[/ARF_Signature]
    </body>*/?>

    <body>
     <div style="background-image: url(<?php echo ARF_PDFCREATOR_DIR.'/images/sidebar.png';?>); background-repeat: no-repeat; background-size: contain;background-position: -10px 0px;">
        <div id="page1" style="background:white;">
          <h2 class="page_title"><u>Erkl&auml;rung</u></h2>
          <div class="page_sub_title">Hiermit stimme ich</div>
          <p class="user_value">[ARF_GetValue:18312], [ARF_GetValue:18314], [ARF_GetValue:18362]</p>
          <p class="text-center" style="font-size: 20px;">Name, Vorname, Geburtsdatum</p><br />
          <div class="text-center" style="font-size: 20px;">zu, dass der Fachbereich B&uuml;rgerservice dem Ordnungsamt im<br /> Rahmen der KFZ- und F&uuml;hrerscheinangelegenheiten meine<br /> Meldedaten trotz eingetragener Auskunftssperre best&auml;tigen <br />darf.</div>

          <div style="margin-top: 160px; width: 100%;">

            <div style="float: left;width: 35%;margin-left:40px;">
              <p class="date dotted"></p>

              <p class="date" style="margin-top: -30px;font-size: 20px;">Datum</p>
              
            </div>
            <div style="float: right;width: 35%;margin-right: 100px">
              <p class="signature dotted"></p>
              <p class="signature" style="margin-top: -30px;font-size: 20px;">Unterschrift</p>
            </div>

          </div>
           <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
        </div>

        <div id="page2" class="box page_two_wrapper">
        <div style="text-align: left;line-height: 15px;margin-bottom: 5px;">Erkl&auml;rung &uuml;ber den Verlust/Diebstahl</div>
        
            <div class="checkimg">
              {ARF_IF [ARF_GetChk_6:23077]==Vorderes Kennzeichen}
                  <img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" />
              {/ARF_IF}{ARF_IF [ARF_GetChk_6:23077]!=Vorderes Kennzeichen}
                  <img src="<?php echo ARF_PDFCREATOR_DIR.'/images/check.png';?>" width="16" height="16" />
              {/ARF_IF} des vorderen Kennzeichens
            </div>
            <div class="checkimg">{ARF_IF [ARF_GetChk_6:23077]==Hinteres Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" />{/ARF_IF}{ARF_IF [ARF_GetChk_6:23077]!=Hinteres Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/check.png';?>" width="16" height="16" />{/ARF_IF} des hinteren Kennzeichens</div>
<div class="checkimg">{ARF_IF [ARF_GetChk_6:23077]==Beide Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" />{/ARF_IF}{ARF_IF [ARF_GetChk_6:23077]!=Beide Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/check.png';?>" width="16" height="16" />{/ARF_IF} beider Kennzeichen</div>
        

          <div class="address page2_address" style="font-size: 14px; line-height: 18px; margin-top: 5px;">
            Stadt M&ouml;nchengladbach<br />
            Der Oberb&uuml;rgermeister<br />
            Amt 32 - Zulassungs- und<br />
            F&uuml;hrerscheinstelle<br />
            Rheinstraße 70<br />
            41065 M&ouml;nchengladbach
          </div>
          
        <div style="font-weight: bolder;font-size: 13px;margin-top: 5px;">1. Erkl&auml;rende/r (= Halter/in)</div>
        
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Name der juristischen Person</div>
            <div class="box-value">[ARF_GetValue:18316]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Name/Ansprechpartner/in bei jur. Personen</div>
            <div class="box-value">[ARF_GetValue:18312]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;border-left: none;">
            <div class="box-title">Vorname</div>
            <div class="box-value">[ARF_GetValue:18314]&nbsp;</div>
          </div>
        </div>

        <div class="box-row">
          <div class="inner-box" style="width:33%; float: left;">
            <div class="box-title">Straße</div>
            <div class="box-value">[ARF_GetValue:18318]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:16%; float: left;">
            <div class="box-title">Hausnummer</div>
            <div class="box-value">[ARF_GetValue:18358]&nbsp;</div>
          </div><div class="inner-box" style="width:16.5%; float: left; border-left: none;">
            <div class="box-title">PLZ</div>
            <div class="box-value">[ARF_GetValue:18313]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left; border-left: none;">
            <div class="box-title">Ort</div>
            <div class="box-value">[ARF_GetValue:18317]&nbsp;</div>
          </div>
        </div>

        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Telefon (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18319]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Fax (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18359]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;border-left: none">
            <div class="box-title">E-Mail (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18350]&nbsp;</div>
          </div>
        </div>

        <br />
        <div style="font-weight: bolder;font-size: 13px;margin-top: 8px;">2. Datum des Verlusts/Diebstahls</div>
        <div class="inner-box" style="width:33%;">
          <div class="box-title">Datum (TT.MM.JJJJ)</div>
          <div class="box-value">[ARF_GetValue:19518]</div>
        </div>
        <br />
        <div style="font-weight: bolder;font-size: 13px;margin-top: 8px;">3. Kennzeichen</div>
        <div class="inner-box" style="width:100%;">
          <div class="box-title">&nbsp;</div>
          <div class="box-value">MG [ARF_GetValue:18324]</div>
        </div>
        <br />
        <div style="font-weight: bolder;font-size: 13px;margin-top: 8px;">4. Sachverhalt/Begr&uuml;ndung</div>
        <div class="inner-box" style="width:100%; height: 100px;">
          <div class="box-value">[ARF_GetValue:19519]</div>
        </div>
        <br />

        <div style="font-weight: bolder;font-size: 13px;margin-top: 8px;">5. Anlagen</div><br />
        
        <div class="checkimg"><img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" /> Zulassungsbescheinigung Teil I + II bzw. Kraftfahrzeugbrief und -schein</div>

        <div class="checkimg"><img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" /> Personalausweis</div>
        <div class="checkimg">{ARF_IF [ARF_GetChk_6:19331]==Diebstahl}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" />{/ARF_IF}{ARF_IF [ARF_GetChk_6:19331]!=Diebstahl}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/check.png';?>" width="16" height="16" />{/ARF_IF} gegebenenfalls Diebstahlsmeldung der Polizei</div>
        <div class="checkimg">{ARF_IF [ARF_GetChk_6:23077]=!Beide Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" />{/ARF_IF}{ARF_IF [ARF_GetChk_6:23077]==Beide Kennzeichen}<img src="<?php echo ARF_PDFCREATOR_DIR.'/images/check.png';?>" width="16" height="16" />{/ARF_IF} gegebenenfalls verbliebenes Kennzeichen</div>
        <div class="checkimg"><img src="<?php echo ARF_PDFCREATOR_DIR.'/images/checked.png';?>" width="16" height="16" /> gegebenenfalls Vollmacht</div>
        

        <div class="inner-box" style="width:100%; height:100px; margin-top: 8px;">
          <div class="box-title">sonstige Anlagen</div>
          <div class="box-value">- HU-Bericht und ASU <br>- T&Uuml;V-Bericht</div>
        </div>
        <br />
        <div style="font-size: 12px;margin-top: 15px;margin-bottom: 0px;">Die Angaben sind vollst&auml;ndig und richtig. Sollte ich das Originaldokument wiedererhalten, werde ich dieses umgehend und unaufgefordert der oben genannten Beh&ouml;rde zukommen lassen.</div>

        <div class="box-row arf_sign_section" style="margin-top: 0px;">
          <div class="inner-box" style="width:33%; float: left">
            <div class="box-title">Ort, Datum</div>
            <div class="box-value">M&ouml;nchengladbach,</div>
          </div>
          <div class="inner-box" style="width:33%; float: left">
            <div class="box-title">Unterschrift</div>
            <div class="box-value">&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%; float: left;border-left: none;">
            <div class="box-title">bei Firmen Firmenstempel</div>
            <div class="box-value">&nbsp;</div>
          </div>
        </div>
      </div>

      <br><br><br>
       <br><br><br>
        <br><br><br>
         <br><br><br>
          <br><br><br>

        <div id="page3" class="box page_three_wrapper">
        <div style="text-align: left;line-height: 15px; margin-bottom: 20px;">
          <div style="font-weight: bolder;font-size: 15px;"> Vollmacht/Einverst&auml;ndniserkl&auml;rung </div>
          <div style="font-weight: bolder;font-size: 15px;"> zur Vorlage bei der</div>
          <div style="font-weight: bolder;font-size: 15px;"> Zulassungsbeh&ouml;rde</div>
        </div>
        <div class="address" style="float: left;line-height: 18px;">
          Stadt M&ouml;nchengladbach<br />
          Der Oberb&uuml;rgermeister<br />
          Amt 32 - Zulassungs- und<br />
          F&uuml;hrerscheinstelle<br />
          Rheinstraße 70<br />
          41065 M&ouml;nchengladbach
        </div>

        <div class="info" style="float: right;line-height: 18px">
          <span style="font-weight: bolder;font-size: 15px;">Achtung: - Wichtiger Hinweis -</span><br>
          <span id="ptag">F&uuml;r Zulassungen gilt seit dem 30.01.2014 das unter Erl&auml;uterungen n&auml;her beschriebene SEPA- Lastschriftverfahren mit dem hierf&uuml;r erforderlichen amtlichen Vordruck.</span>
        </div>

        <div style="clear: both;"></div>
        <br /><br>
        <span style="font-weight: bolder;font-size: 14px;"><b>1. Vollmacht zur Vorlage bei der Zulassungsbeh&ouml;rde</b></span><br>
        <span style="font-weight:normal;font-size: 12px;">Hiermit bevollm&auml;chtige ich</span><br>
       
        <span style="font-weight: bolder;font-size: 12px;">Zuk&uuml;nftige/r Halter/in</span>
        
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Name der juristischen Person</div>
            <div class="box-value">[ARF_GetValue:18316]&nbsp;</div>
          </div>
          
          <div class="inner-box" style="width:33%;float: left">
            <div class="box-title">Name/Ansprechpartner/in bei jur. Personen</div>
            <div class="box-value">[ARF_GetValue:18312]&nbsp;</div>
          </div>
          
          <div class="inner-box" style="width:32%;float: left">
            <div class="box-title">Vorname</div>
            <div class="box-value">[ARF_GetValue:18314]&nbsp;</div>
          </div>
        </div>

        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Straße</div>
            <div class="box-value">[ARF_GetValue:18318]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:16%;float: left;">
            <div class="box-title">Hausnummer</div>
            <div class="box-value">[ARF_GetValue:18358]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:16.5%; border-left: none;float: left;">
            <div class="box-title" >PLZ</div>
            <div class="box-value" >[ARF_GetValue:18313]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;">
            <div class="box-title">Ort</div>
            <div class="box-value">[ARF_GetValue:18317]&nbsp;</div>
          </div>
        </div>
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Telefon (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18319]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Fax (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18359]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;">
            <div class="box-title">E-Mail (Angabe freiwillig)</div>
            <div class="box-value">[ARF_GetValue:18350]&nbsp;</div>
          </div>
        </div>

        <br />
        <div style="margin: 5px 0 2px 0; font-size: 12px;">als Bevollm&auml;chtigte/r</div>
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Name der juristischen Person</div>
            <div class="box-value">Dieter Bommes Schilderfabrik GmbH</div>
          </div>
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Name/Ansprechpartner/in bei jur. Personen</div>
            <div class="box-value">Bommes</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;">
            <div class="box-title">Vorname</div>
            <div class="box-value">Olaf</div>
          </div>
        </div>
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Straße</div>
            <div class="box-value">Borsigstr.</div>
          </div>
          <div class="inner-box" style="width:16%;float: left;border-left: none;">
            <div class="box-title">Hausnummer</div>
            <div class="box-value">2</div>
          </div>
          <div class="inner-box" style="width:16.5%;border-left: none; float: left">
            <div class="box-title">PLZ</div>
            <div class="box-value">41066</div>
          </div>
          <div class="inner-box" style="float: left;width: 32%;">
            <div class="box-title">Ort</div>
            <div class="box-value">Monchengladbach</div>
          </div>

        </div>
        <div class="box-row">
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Telefon (Angabe freiwillig)</div>
            <div class="box-value">02161 / 44870 </div>
          </div>
          <div class="inner-box" style="width:33%;float: left;">
            <div class="box-title">Fax (Angabe freiwillig)</div>
            <div class="box-value">&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;">
            <div class="box-title">E-Mail (Angabe freiwillig)</div>
            <div class="box-value">&nbsp;</div>
          </div>
        </div>
        <div style="margin-top: 5px; margin-bottom: 2px; font-size:12px;">das nachstehende Fahrzeug f&uuml;r mich/die vorgenannte Firma zuzulassen und die Fahrzeugpapiere in Empfang zu nehmen.</div>
        <div class="box-row">
          <div class="inner-box" style="width:46%;float: left;">
            <div class="box-title">Hersteller</div>
            <div class="box-value">[ARF_GetValue:18321]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:20%;float: left;">
            <div class="box-title">Typ</div>
            <div class="box-value">[ARF_GetValue:18322]&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left;">
            <div class="box-title">Fahrzeug-Ident-Nr.</div>
            <div class="box-value">[ARF_GetValue:18323]&nbsp;</div>
          </div>
        </div>

        <div class="box-row">
          <div class="inner-box" style="width:46%;">
              <div class="box-title" style="margin-top: 7px;">Amtliches Kennzeichen des Fahrzeugs</div>
              <div class="box-value" style="margin-top: 0px;">MG [ARF_GetValue:18324]</div>
          </div>
        </div>
        <span style="font-weight: bolder;font-size:12px">2. Einverst&auml;ndniserkl&auml;rung</span><br>
        <span style="margin-top:0;font-size: 12px">Ich erkl&auml;re mein Einverst&auml;ndnis, dass der/dem Bevollm&auml;chtigten mitgeteilt wird, ob Geb&uuml;hrenr&uuml;ckst&auml;nde beim Straßenverkehrsamt und/oder Kraftfahrzeugsteuerr&uuml;ckst&auml;nde bestehen, die die Zulassung des Fahrzeuges verhindern.</span>

        <div class="inner-box" style="width: 99.2%;padding-top: 5px;">
          
          <span style="font-size: 11px;font-weight: bolder">Erl&auml;uterungen:</span><br>
          <span style="font-size: 10px">1. Vollmacht</span><br>
          <span style="font-size: 10px;">Sie k&ouml;nnen sich bei der Zulassung eines Fahrzeuges durch eine Bevollm&auml;chtigte/einen Bevollm&auml;chtigten vertreten lassen. Dazu ist es erforderlich, dass Sie die oben abgedruckte Vollmacht vollst&auml;ndig ausf&uuml;llen und unterschreiben. Die Vorlage des Personalausweises oder des Reisepasses der Vollmachtgeberin/des Vollmachtgebers und der/des Bevollm&auml;chtigten ist bei der Zulassungsbeh&ouml;rde erforderlich.</span>
          <div style="font-size: 11px;font-weight: bolder;margin-top: 3px">2. Einverst&auml;ndniserkl&auml;rung</div>
          <span style="font-size: 10px;">In den Zulassungsstellen in NRW ist seit dem 01.01.2006 f&uuml;r die Zulassung eines Fahrzeuges Voraussetzung, dass der Halter/die Halterin in NRW keine Kraftfahrzeugsteuerr&uuml;ckst&auml;nde hat. Im Fall der Bevollm&auml;chtigung setzt die Zulassung eine Einverst&auml;ndniserkl&auml;rung der k&uuml;nftigen Fahrzeughalterin/des k&uuml;nftigen Fahrzeughalters voraus, nach der die Zulassungsstelle die bevollm&auml;chtigte Person &uuml;ber das Bestehen von Kraftfahrzeugsteuerr&uuml;ckst&auml;nden unterrichten darf. Ein Fahrzeug wird nicht zugelassen, wenn Kraftfahrzeugsteuerr&uuml;ckst&auml;nde vorhanden sind. Weiterhin wird seit dem 01.09.2006 ein Fahrzeug nicht zugelassen, wenn r&uuml;ckst&auml;ndige Geb&uuml;hren oder Auslagen aus vorangegangenen Zulassungs- und damit zusammenh&auml;ngenden Verwaltungsvorg&auml;ngen vorhanden sind und diese Geb&uuml;hren und Auslagen der Zulassungsbeh&ouml;rde zustehen (§1 BEG NRW).</span><br>
          <div style="font-size: 11px;font-weight: bolder;margin-top: 3px">3. Lastschrifteinzugsverfahren</div>
          <span style="font-size: 10px;">In NRW ist seit dem 01.11.2005 f&uuml;r die Zulassung eines Fahrzeugs zwingend die Teilnahme am Lastschrift-Einzugsverfahren erforderlich. Ab dem 01.02.2014 wird das bisherige nationale Lastschrifteinzugsverfahren durch das SEPA-Lastschriftverfahren ersetzt. Ab dem 30.01.2014 ist hierf&uuml;r bei jeder einzelnen Zulassung ausschließlich ein SEPA-Lastschriftmandat des Zahlers nach amtlichem Muster zu verwenden.</span>
        </div>
        <div class="box-row arf_sign_section" style="margin-top: 0px;">
          <div class="inner-box" style="width:33%;float: left">
            <div class="box-title">Ort, Datum</div>
            <div class="box-value">M&ouml;nchengladbach,</div>
          </div>
          <div class="inner-box" style="width:33%;float: left">
            <div class="box-title">Unterschrift</div>
            <div class="box-value">&nbsp;</div>
          </div>
          <div class="inner-box" style="width:32%;float: left">
            <div class="box-title">bei Firmen Firmenstempel</div>
            <div class="box-value">&nbsp;</div>
          </div>
        </div>
      </div>

      </div>
    </body>

</html>