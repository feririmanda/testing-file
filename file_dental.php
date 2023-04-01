<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Dental Clinic | Patient</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="My Dental Clinic helps dentist manage their patients and clinic by keeping a database of their patients records on their mobile phone, tablet and desktop.">
        <link rel="icon" type="image/png" sizes="192x192" href="https://web.dentalclinicapp.com/website/images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://web.dentalclinicapp.com/website/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://web.dentalclinicapp.com/website/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://web.dentalclinicapp.com/website/images/favicon-16x16.png">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/jquery-ui-1.11.2/jquery-ui.min.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/sweetalert2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/dist/css/skins/_all-skins.min.css">
         <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/smartmenus-1.0.0/addons/bootstrap/jquery.smartmenus.bootstrap.css">
        <!-- <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/bootstrap-tour-0.12.0/build/css/bootstrap-tour.min.css"> -->
        <link rel="stylesheet" type="text/css" href="https://web.dentalclinicapp.com/template/AdminLTE/clinic/css/clinic-all.css">
        <link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/iCheck/square/blue.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/viewerjs-master/dist/viewer.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/intlnum/css/intlTelInput.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/fileinput/fileinput.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/select2/select2.min.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/select2/select2.bootstrap.css">
<link rel="stylesheet" href="https://web.dentalclinicapp.com/template/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"><style type="text/css">
	area {
		cursor: pointer;
	}
	.adult, .pediatric{
		margin: 0 auto;
		border: none;
/*		height: 400px;
		width: auto;*/
	}

	.nav-tabs > li.active > a{
		background: #18a2eb !important;
		color:#fff !important;
	}

	div.loading-backdrop{
		position: absolute;
		margin: 0 auto;
		border: none;
		height: 400px;
		width: 98%;
		z-index: 4;
	}

	body.modal-open {
	    overflow: hidden;
	    /*position: fixed;*/
	}

	.add_chart_header > .modal-header{
		height:60px;
		background-color: #9f4ebe;
		color: white;
	}

	.view_chart_header > .modal-header{
		height:60px;
		background-color: white;
	}

	.chart_modal_dialog > .modal-content{
 	    max-height: calc(100vh - 100px);
 	    -webkit-overflow-scrolling: auto;
	    overflow-y: auto;
	}
</style><style type="text/css">
	.select_modal_dialog > .modal-content{
 	    max-height: calc(100vh - 150px);
 	    -webkit-overflow-scrolling: auto;
	    overflow-y: auto;
	}
	td.td_note_checkbox, td.td_payment_checkbox {
	    text-align: center !important; /* center checkbox horizontally */
	    vertical-align: middle !important; /* center checkbox vertically */
	}
</style><style type="text/css">
	.patient-contact .p-name{
		font-size: 18pt;
	}
	.p-action a{
		border-radius: 50px;
		width: 40px;
		height:40px;
		padding:10px;
		border: 1px solid #ededed;
		color: #18a2eb;
	}
	.patient-contact > .btn-default{
		border-radius: 50px;
		padding:5px;
		width: 35px;
		height:35px;
		border: 2px #196eee solid;
	}
	.clinic-patient-info{
		margin:0 20px;
	}
	.clinic-patient-info div{
		padding:10px;
		border-top:1px solid #ededed;
	}
	.clinic-patient-info div:last-child{
		border-bottom:1px solid #ededed;
		margin-bottom:40px;
	}
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
	  -webkit-appearance: none; 
	  margin: 0; 
	}
	.patient-panel{
		cursor: pointer;
	}
	.kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
	  margin: 0;
	  padding: 0;
	  border: none;
	  box-shadow: none;
	  text-align: center;
	}
	.file-default-preview img{
		width: 200px;
		height: 200px
	}
	.file-preview-frame img{
		width: 200px !important;
		height: 200px !important;
	}
	.file-caption{
		border:none;
	}
	.kv-avatar .file-input {
	  display: table-cell;
	  max-width: 210px;
	  max-height: 200px;
	}
	.text-black{
		color: black;
	}
	body{
		padding-right: 0 !important;
	}
	#note-payment-installment-table th, #note-payment-installment-table td{
		white-space: nowrap !important;
	}
	#note-payment-table-cash th, #note-payment-table-cash td{
		white-space: nowrap !important;
	}

	.table.no-border th, .table.no-border td { 
	    border-top: none !important;
	    border-left: none !important;
	    border-bottom: none !important;
	}

	.table.no-border {
	    border: none !important;
	    margin-bottom: 0px !important;
	}
</style>
    <style>@-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions{flex:1;align-self:stretch;justify-content:flex-end;height:2.2em}body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror{font-size:1em}body.swal2-toast-shown>.swal2-container{position:fixed;background-color:transparent}body.swal2-toast-shown>.swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown>.swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown>.swal2-container.swal2-top-end,body.swal2-toast-shown>.swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown>.swal2-container.swal2-top-left,body.swal2-toast-shown>.swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown>.swal2-container.swal2-center-left,body.swal2-toast-shown>.swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown>.swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown>.swal2-container.swal2-center-end,body.swal2-toast-shown>.swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown>.swal2-container.swal2-bottom-left,body.swal2-toast-shown>.swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown>.swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown>.swal2-container.swal2-bottom-end,body.swal2-toast-shown>.swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;box-shadow:0 0 .625em #d9d9d9;overflow-y:hidden}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-close{position:initial}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon-text{font-size:2em;font-weight:700;line-height:1em}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:2em;height:2.8125em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.25em;left:-.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 2em;transform-origin:0 2em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:showSweetToast .5s;animation:showSweetToast .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:hideSweetToast .2s forwards;animation:hideSweetToast .2s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:animate-toast-success-tip .75s;animation:animate-toast-success-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:animate-toast-success-long .75s;animation:animate-toast-success-long .75s}@-webkit-keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@-webkit-keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){height:auto;overflow-y:hidden}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:10px;background-color:transparent;z-index:1060;overflow-x:hidden;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem;box-sizing:border-box}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-popup .swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-popup .swal2-title{display:block;position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-popup .swal2-actions{align-items:center;justify-content:center;margin:1.25em auto 0}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{width:2.5em;height:2.5em;margin:.46875em;padding:0;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;box-sizing:border-box;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{display:inline-block;width:15px;height:15px;margin-left:5px;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff;content:'';-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal}.swal2-popup .swal2-styled{margin:0 .3125em;padding:.625em 2em;font-weight:500;box-shadow:none}.swal2-popup .swal2-styled:not([disabled]){cursor:pointer}.swal2-popup .swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-popup .swal2-styled::-moz-focus-inner{border:0}.swal2-popup .swal2-footer{justify-content:center;margin:1.25em 0 0;padding-top:1em;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-popup .swal2-image{max-width:100%;margin:1.25em auto}.swal2-popup .swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;min-width:1.2em;height:1.2em;margin:0;padding:0;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:calc(2.5em - .25em);line-height:1.2em;cursor:pointer}.swal2-popup .swal2-close:hover{-webkit-transform:none;transform:none;color:#f27474}.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{display:none}.swal2-popup .swal2-content{justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;word-wrap:break-word}.swal2-popup #swal2-content{text-align:center}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{margin:1em auto}.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;font-size:1.125em;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);box-sizing:border-box}.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{color:#ccc}.swal2-popup .swal2-range input{width:80%}.swal2-popup .swal2-range output{width:20%;font-weight:600;text-align:center}.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{height:2.625em;margin:1em auto;padding:0;font-size:1.125em;line-height:2.625em}.swal2-popup .swal2-input{height:2.625em;padding:.75em}.swal2-popup .swal2-input[type=number]{max-width:10em}.swal2-popup .swal2-file{font-size:1.125em}.swal2-popup .swal2-textarea{height:6.75em;padding:.75em}.swal2-popup .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;color:#545454;font-size:1.125em}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{align-items:center;justify-content:center}.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{margin:0 .4em}.swal2-popup .swal2-validationerror{display:none;align-items:center;justify-content:center;padding:.625em;background:#f0f0f0;color:#666;font-size:1em;font-weight:300;overflow:hidden}.swal2-popup .swal2-validationerror::before{display:inline-block;width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center;content:'!';zoom:normal}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}.swal2-icon{position:relative;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;zoom:normal}.swal2-icon-text{font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;top:-.25em;left:-.25em;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%;z-index:2;box-sizing:content-box}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;height:.3125em;border-radius:.125em;background-color:#a5dc86;z-index:2}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{align-items:center;margin:0 0 1.25em;padding:0;font-weight:600}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{background:#add8e6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{width:2.5em;height:.4em;margin:0 -1px;background:#3085d6;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}[dir=rtl] .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style></head>
    <body class="skin-blue sidebar-mini wysihtml5-supported modal-open" data-datepicker-format="mm/dd/yy" data-datepicker-date="Nov 02, 2022" data-datepicker-mask="mm/dd/yyyy" style="padding-right: 17px;">
        <div class="wrapper">
            <header class="main-header">
                <a href="https://web.dentalclinicapp.com/clinic/dashboard" class="logo">
                    <span class="logo-mini"><img src="https://web.dentalclinicapp.com/uploads/logo-tooth.png" style="width:30px" alt="tooth logo"></span>
                    <span class="logo-lg"><img src="https://web.dentalclinicapp.com/uploads/logo.png" style="width:200px" alt="logo"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top nav-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-search-mobile hidden-lg hidden-md">
                                                                                    <form action="https://web.dentalclinicapp.com/clinic/patient" class="form-inline nav-search-right" method="GET">
                                    <div class="form-group" style="margin:10px 0 0 0">
                                        <input name="patient_name" type="text" class="form-control fa-placholder patient_name" placeholder=" Search Patient Name" autocomplete="off">
                                    </div>
                                </form>
                                                                        </div>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav sm" data-smartmenus-id="166736172361218">

                                                        <li>
                                                                    <a href="https://web.dentalclinicapp.com/patient/form/7xVFqiz2LqpgEPWSEvSIIejbfPRgVD70I1J6XkhtNgeI9MN7Zq9PItFJWOWA/XNJN93D47y" target="_blank" style="background-color: #5cb85c"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Patient Self Service</a>
                                                            </li>
                            
                                                        <li>
                                <a href="https://web.dentalclinicapp.com/clinic/7xVFqiz2LqpgEPWSEvSIIejbfPRgVD70I1J6XkhtNgeI9MN7Zq9PItFJWOWA/subscription" style="background-color: #d9534f;"><i class="fa fa-arrow-circle-up"></i>&nbsp;&nbsp;UPGRADE NOW</a>
                            </li>
                                                        <li class="dropdown user user-menu">
                                <a href="#" class="has-submenu" id="sm-166736172361218-1" aria-haspopup="true" aria-controls="sm-166736172361218-2" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;<span class="hidden-xs">Dr. Feri Rimanda</span>&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu" role="group" id="sm-166736172361218-2" aria-hidden="true" aria-labelledby="sm-166736172361218-1" aria-expanded="false">
                                                                    <li><a href="https://web.dentalclinicapp.com/clinic/profile/edit"><i class="fa fa-pencil"></i>Update Profile</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="https://web.dentalclinicapp.com/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                                                                        <form action="https://web.dentalclinicapp.com/clinic/patient" class="form-inline" method="GET">
                                <div class="form-group" style="margin:10px 0 0 0">
                                    <input name="patient_name" type="text" class="form-control fa-placholder patient-searchbox" placeholder=" Search Patient Name" autocomplete="off">
                                </div>
                            </form>
                                                            </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                    <div class="image">
                                                    <img src="https://mydental-clinic-production-bucket.s3.us-west-2.amazonaws.com/uploads/46617/profile_picture/4043af05637f57020221018092552.jpeg" class="img-circle" alt="User Image">
                                            </div>
                                                                    <a href="https://web.dentalclinicapp.com/clinic/profile/edit" class="btn-edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile
                        </a>
                                                                </div>
                                            <a href="https://web.dentalclinicapp.com/clinic/settings/account-subscription">
                            <div style="background-color: #5cb85c; color: white; padding: 5px; padding-top: 10px;" class="text-center">
                                <span>You are subscribed until</span><br>
                                <span>Dec 17, 2022</span>
                            </div>
                        </a>
                                        <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>&nbsp;</li>
                        <li class="treeview ">
                            <a href="https://web.dentalclinicapp.com/clinic/dashboard"><i class="fa fa-home fa-fw"></i> <span>My Dashboard</span></a>
                        </li>
                                                <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                    <span>My Clinic</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/profile"><i class="fa fa-user-circle" aria-hidden="true"></i> <span>Profile</span></a>
                                </li>
                                                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/settings/drug-generic"><i class="fa fa-medkit" aria-hidden="true"></i> <span>Drug Lists</span></a>
                                </li>
                                                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/procedures"><i class="fa fa-list-ul" aria-hidden="true"></i> <span>Procedures</span></a>
                                </li>
                                                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/insurance"><i class="fa fa-vcard-o" aria-hidden="true"></i> <span>Insurance</span></a>
                                </li>
                                                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/payment-method"><i class="fa fa-money" aria-hidden="true"></i> <span>Payment Method</span></a>
                                </li>
                                                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/settings/hows"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span>Patient Source</span></a>
                                </li>
                                                            </ul>
                        </li>
                                                                        <li class="treeview ">
                            <a href="https://web.dentalclinicapp.com/clinic/appointment"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> <span>My Appointments</span></a>
                        </li>
                                                                        <li class="treeview active">
                            <a href="https://web.dentalclinicapp.com/clinic/patient"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>My Patients</span></a>
                        </li>
                                                                        <li class="treeview ">
                            <a href="https://web.dentalclinicapp.com/clinic/finance"><i class="fa fa-money" aria-hidden="true"></i> <span>Finance</span></a>
                        </li>
                                                                                                        <li class="treeview ">
                                <a href="#">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                        <span>Manage Users</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                                                        <li class="">
                                        <a href="https://web.dentalclinicapp.com/clinic/user"><i class="fa fa-user-circle" aria-hidden="true"></i> <span>User's List</span></a>
                                    </li>
                                                                                                            <li class="">
                                        <a href="https://web.dentalclinicapp.com/clinic/role"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>Role Manager</span></a>
                                    </li>
                                                                    </ul>
                            </li>
                                                                                                                                    <li class="treeview ">
                                <a href="https://web.dentalclinicapp.com/clinic/backup"><i class="fa fa-database" aria-hidden="true"></i> <span>Download Data</span></a>
                            </li>
                                                                                                    <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                    <span>Settings</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                                                <li class="treeview ">
                                    <a href="https://web.dentalclinicapp.com/clinic/settings/import-patient"><i class="fa fa-upload" aria-hidden="true"></i> <span>Import Patient</span></a>
                                </li>
                                                                                                <li class="">
                                    <a href="https://web.dentalclinicapp.com/clinic/settings/change-password"><i class="fa fa-key" aria-hidden="true"></i> <span>Change Password</span></a>
                                </li>
                                                                                                                                        <li class="">
                                        <a href="https://web.dentalclinicapp.com/clinic/settings/account-subscription"><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Account Subscription</span></a>
                                    </li>
                                                                                                                                                                            <li class="">
                                        <a href="https://web.dentalclinicapp.com/clinic/settings/connected-devices"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i> <span>Connected Device</span></a>
                                    </li>
                                                                                                                                                                            <li class="treeview ">
                                        <a href="https://web.dentalclinicapp.com/clinic/app-settings"><i class="fa fa-cog" aria-hidden="true"></i> <span>Application Settings</span></a>
                                    </li>
                                                                                                </ul>
                        </li>
                                                                        <li>
                            <a href="https://web.dentalclinicapp.com/clinic/7xVFqiz2LqpgEPWSEvSIIejbfPRgVD70I1J6XkhtNgeI9MN7Zq9PItFJWOWA/subscription"><span class="clinic-text-magenta"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>Upgrade Account</b></span></a>
                        </li>
                                                                        <li class="treeview ">
                            <a href="https://web.dentalclinicapp.com/clinic/feedback"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Send Feedback</span></a>
                        </li>
                                                                        <li class="treeview ">
                            <a href="https://web.dentalclinicapp.com/clinic/share" target="_blank"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Share to Friends</span></a>
                        </li>
                                            </ul>
                </section>
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 769px;">
                <div class="container-fluid">
                    <div class="row">
	<div class="col-md-12">
		<section class="content-header">
			 
		</section>
		<section class="content">
			<div class="box box-primary">
				<div class="box-header with-border">
					<div class="pull-left">
						<a data-toggle="collapse" href="#info" style="color:#444" class="" aria-expanded="true">
							<span class="clinic-box-title">
								<i class="fa fa-info" aria-hidden="true"></i> &nbsp;Patient Information
							</span>
						</a>
					</div>
				</div>
				<div id="info" class="panel-collapse collapse in" aria-expanded="true" style="">
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="pull-left image clinic-image" style="padding:20px">
																			<img src="https://mydental-clinic-production-bucket.s3.us-west-2.amazonaws.com/uploads/46617/photos/403814/b2765cb662af93620221020054956.jpeg" class="img-circle" style="width:100px;height:100px">
																	</div>
								<div class="pull-left patient-contact" style="padding:30px 10px">
									<p class="clinic-text-gray p-name">
										<b>Feri Rimanda Kim</b>
									</p>
									<p class="clinic-text-gray p-contact">
						        		<i class="fa fa-phone fa-fw"></i> : +62 821-6911-0339<br>
					        		</p>
					        		<p class="text-primary p-action">
					        								        				<span data-toggle="tooltip" title="" data-original-title="Call"><a href="https://hangouts.google.com/" class="btn btn-round btn-default" target="_blank"><i class="fa fa-phone fa-dc-icon fa-lg"></i></a></span>
					        								        			<span data-toggle="tooltip" title="" data-original-title="Download PDF"><a href="#download-pdf" data-toggle="modal" data-target="#download-pdf-modal" class="btn btn-round btn-default"><i class="fa fa-file-pdf-o fa-dc-icon fa-lg"></i></a></span>
					        			<span data-toggle="tooltip" title="" data-original-title="Recall this patient"><a href="#recall-date" data-toggle="modal" data-target="#recall-date-modal" id="recall_date_btn" class="btn btn-round btn-default" data-recall_date="11/03/2022"><i class="fa fa-calendar fa-dc-icon fa-lg"></i></a></span>
					        			<!-- <a href="mailto:feririmanda@gmail.com" class="btn btn-round btn-default" target="_top"><i class="fa fa-envelope fa-dc-icon fa-lg"></i></a> -->
					        			<!-- <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=feririmanda@gmail.com" class="btn btn-round btn-default"><i class="fa fa-envelope fa-dc-icon fa-lg"></i></a> -->
					        		</p>
								</div>
								<div class="pull-right">
																			<a href="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/edit" class="btn btn-primary btn-sm btn-loading" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Please wait..."><span class="fa fa-pencil"></span> &nbsp;Edit</a>
																				<a data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr" class="btn clinic-btn-magenta btn-sm" id="btn-delete"><span class="fa fa-trash"></span> &nbsp;Delete</a>
																											</div>
							</div>
						</div>
						<div class="row">
															<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											&nbsp;&nbsp;&nbsp;&nbsp;
											<span style="color:#dd4b39;"><b><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Allergies : </b>alkohol</span>
										</div>
									</div>
								</div>
														<div class="col-md-12 clinic-text-gray">
								<div class="row clinic-patient-info">
									
									<div class="col-md-6">
										<span><b>Email : </b><a href="mailto:feririmanda@gmail.com">feririmanda@gmail.com</a></span>
									</div>
									<div class="col-md-6">
										<span><b>Gender : </b>Male</span>
									</div>
									<div class="col-md-6">
										<span><b>Address : </b>Perumahan citra regency swarna blok a no 20 
																						<br>
					        					<a href="https://www.google.com/maps/search/?api=1&amp;query=Perumahan+citra+regency+swarna+blok+a+no+20" style="font-size: 12px !important;" target="_blank"><i class="fa fa-map"></i> Open Map</a>
					        									        			</span>
									</div>
									<div class="col-md-3">
										<span><b>Birthdate : </b>
																							Oct 01, 1990
																					</span>
									</div>
									<div class="col-md-3">
										<span><b>Age : </b>32</span>
									</div>
									<div class="col-md-12">
										<span><b>Notes : </b></span>
									</div>
									
									<div class="col-md-6">
										<span><b>Date Added : </b>Oct 20, 2022</span>
									</div>
									<div class="col-md-6">
										<span><b>Recall Date : </b><span id="recall_date_text">Nov 03, 2022</span></span>
									</div>
									
									<div class="col-md-12">
										<span>
											<b>How did you hear about us? : </b>
																																				google
																																	</span>
									</div>
									<div class="col-md-6">
										<span><b>Profession / Job : </b>Programmer</span>
									</div>
									
									<div class="col-md-6">
										<span><b>Indentification Number: </b>3216050110900009</span>
									</div>
									<div class="col-md-12">
										<span><b>In Case of Emergency</b>
									</span></div>
									<div class="col-md-6" style="border-top: none !important;padding-top: 0 !important;margin: 0 !important;">
										<span><b>Name : </b>Radit</span>
									</div>
									<div class="col-md-6" style="border-top: none !important;padding-top: 0 !important;	margin: 0 !important;">
										<span><b>Contact No. : </b>+62 821-6911-0338</span>
									</div>
									<div class="col-md-12" style="border-bottom: none !important;;padding-top: 0 !important;	margin: 0 !important;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
							<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
							<span id="medical-action"> 
											<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-backdrop="static" data-target="#medical-history-modal"><span class="fa fa-plus"></span> &nbsp;
							Edit Medical History
						</button>
									</span>
				<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-backdrop="static" data-target="#medical-history-file-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/medical-files" data-filename="https://web.dentalclinicapp.com/uploads/no_pic.jpg"><span class="fa fa-plus"></span> &nbsp;
					Add Document
				</button>
					</div>
		<a data-toggle="collapse" href="#medical" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Medical History&nbsp;&nbsp;&nbsp;&nbsp;</span><span id="medical_files_count" class="clinic-patient-count"> 2</span><br>
					<span style="font-size: 10pt !important">Your patient's medical history</span>
				</div>
			</span>
		</a>
	</div>
	<div id="medical" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="medical_files">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12" id="medical_history_text">
				    <div style="height: 200px;overflow-wrap: break-word" id="medical_text" class="clinic-text-gray">
											        <p>ini adalah anamnesa pertama</p>										    </div>
				</div>
				<div class="col-md-12">
					<hr width="100%" color="#9f4ebe">
					<span class="clinic-box-title">
						<div class="pull-left clinic-box-patient-header">
							<i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;<span>Medical History Files</span>
						</div>
					</span>
				</div>
				<div class="col-md-12">
					<div class="table-responsive">
						<div id="medical-files-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="medical-files-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="medical-files-table"></label></div></div><div id="medical-files-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="medical-files-table" width="100%" role="grid" style="width: 100%;">
						     <thead>
						         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 15px;" aria-label="No.">No.</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 150px;" aria-label="File">File</th><th class="sorting_desc" tabindex="0" aria-controls="medical-files-table" rowspan="1" colspan="1" style="width: 150px;" aria-sort="descending" aria-label="Last Updated: activate to sort column ascending">Last Updated</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Remarks">Remarks</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 80px;" aria-label=""></th></tr>
						     </thead>
						<tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_input input-pagination" id="medical-files-table_paginate" style="display: none;"><a class="paginate_button first disabled btn btn-primary btn-sm btn-flat">First</a><a class="paginate_button previous disabled  btn btn-primary btn-sm btn-flat" id="medical-files-table_previous">Previous</a><span class="paginate_page">Page </span><input class="paginate_input form-control input-sm" size="5" type="text"><span class="paginate_of"></span><a class="paginate_button next  btn btn-primary btn-sm btn-flat" id="medical-files-table_next">Next</a><a class="paginate_button last  btn btn-primary btn-sm btn-flat" id="medical-files-table_last">Last</a></div></div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="medical-history-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="medical-history-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="medical-history-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>
										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
												<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#treatment-plan-modal" data-backdrop="static" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/treatment-plan"><span class="fa fa-plus"></span> &nbsp;Add Treatment Plan</button>
									</div>
		<a data-toggle="collapse" href="#treatment-plan" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Treatment Plan&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="treatment-plan-count clinic-patient-count"> 1</span><br>
					<span style="font-size: 10pt !important">Your patient's treatment plan list</span>
				</div>
			</span>
		</a>
	</div>
	<div id="treatment-plan" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="treatment_plan">
		<div class="box-body">
			<div class="table-responsive">
				<div id="treatment-plan-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="treatment-plan-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="treatment-plan-table"></label></div></div><div id="treatment-plan-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="treatment-plan-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting" tabindex="0" aria-controls="treatment-plan-table" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 340px;">Details</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Notes">Notes</th><th class="sorting" tabindex="0" aria-controls="treatment-plan-table" rowspan="1" colspan="1" aria-label="Last Updated: activate to sort column ascending" style="width: 150px;">Last Updated</th><th class="text-center sorting_desc" rowspan="1" colspan="1" aria-label="" style="width: 100px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="treatment-plan-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="treatment-plan-table_previous"><a href="#" aria-controls="treatment-plan-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="treatment-plan-table_next"><a href="#" aria-controls="treatment-plan-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="treatment-plan-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="treatment-plan-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="treatment-plan-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
												<button class="btn btn-sm clinic-btn-magenta" data-toggle="modal" data-target="#dental-chart-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes"><span class="fa fa-plus"></span> &nbsp;Add Dental Chart</button>
									</div>
		<a data-toggle="collapse" href="#dental-chart" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<span class="fa fa-bar-chart"></span> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Dental Charts&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="dental-chart-count clinic-patient-count"> 2</span><br>
					<span style="font-size: 10pt !important">Review chart made from the patient's visit</span>
				</div>
			</span>

		</a>
	</div>
	<div id="dental-chart" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="dental_chart">
		<div class="box-body">
			<div class="table-responsive">
				<div id="dental-chart-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="dental-chart-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dental-chart-table"></label></div></div><div id="dental-chart-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="dental-chart-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Note Color" style="width: 90px;">Note Color</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Tooth Name" style="width: 90px;">Tooth Name</th><th class="sorting" tabindex="0" aria-controls="dental-chart-table" rowspan="1" colspan="1" aria-label="Note Date: activate to sort column ascending" style="width: 90px;">Note Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Procedures">Procedures</th><th class="sorting_desc" tabindex="0" aria-controls="dental-chart-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Last Updated: activate to sort column ascending" style="width: 150px;">Last Updated</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Notes">Notes</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 90px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="dental-chart-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="dental-chart-table_previous"><a href="#" aria-controls="dental-chart-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="dental-chart-table_next"><a href="#" aria-controls="dental-chart-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="dental-chart-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="dental-chart-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="dental-chart-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
							<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#dental-notes-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes"><span class="fa fa-plus"></span> &nbsp;Add Dental Notes</button>
					</div>
		<a data-toggle="collapse" href="#dental-notes" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-file-o" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Dental Notes&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="dental-notes-count clinic-patient-count"> 2</span><br>
					<span style="font-size: 10pt !important">Review notes made from the patient's visit</span>
				</div>
			</span>
		</a>
	</div>
	<div id="dental-notes" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="dental_note">
		<div class="box-body">
			<div class="table-responsive">
				<div id="dental-notes-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="dental-notes-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dental-notes-table"></label></div></div><div id="dental-notes-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="dental-notes-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Note Color" style="width: 90px;">Note Color</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Tooth Name" style="width: 90px;">Tooth Name</th><th class="sorting" tabindex="0" aria-controls="dental-notes-table" rowspan="1" colspan="1" aria-label="Note Date: activate to sort column ascending" style="width: 90px;">Note Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Procedures">Procedures</th><th class="sorting_desc" tabindex="0" aria-controls="dental-notes-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Last Updated: activate to sort column ascending" style="width: 150px;">Last Updated</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Notes">Notes</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="dental-notes-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="dental-notes-table_previous"><a href="#" aria-controls="dental-notes-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="dental-notes-table_next"><a href="#" aria-controls="dental-notes-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="dental-notes-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="dental-notes-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="dental-notes-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
												<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#request-forms-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/request-forms"><span class="fa fa-plus"></span> &nbsp;Add Request</button>
									</div>
		<a data-toggle="collapse" href="#request-forms" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-edit" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Request Form&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="request-forms-count clinic-patient-count"> 0</span><br>
					<span style="font-size: 10pt !important">Request list for patient's</span>
				</div>
			</span>
		</a>
	</div>
	<div id="request-forms" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="request-forms">
		<div class="box-body">
			<div class="table-responsive">
				<div id="request-forms-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="request-forms-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="request-forms-table"></label></div></div><div id="request-forms-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="request-forms-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting_desc" tabindex="0" aria-controls="request-forms-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Request Date: activate to sort column ascending" style="width: 90px;">Request Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Request">Request</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Remarks">Remarks</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="request-forms-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="request-forms-table_previous"><a href="#" aria-controls="request-forms-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="request-forms-table_next"><a href="#" aria-controls="request-forms-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="request-forms-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="request-forms-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="request-forms-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
												<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#dental-certificates-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-certificates"><span class="fa fa-plus"></span> &nbsp;Add Certificate</button>
									</div>
		<a data-toggle="collapse" href="#dental-certificates" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-certificate" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Dental Certificates&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="dental-certificates-count clinic-patient-count"> 0</span><br>
					<span style="font-size: 10pt !important">List of requested certificates</span>
				</div>
			</span>
		</a>
	</div>
	<div id="dental-certificates" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="dental-certificates">
		<div class="box-body">
			<div class="table-responsive">
				<div id="dental-certificates-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="dental-certificates-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dental-certificates-table"></label></div></div><div id="dental-certificates-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="dental-certificates-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting_desc" tabindex="0" aria-controls="dental-certificates-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Date: activate to sort column ascending" style="width: 90px;">Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Procedures">Procedures</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Remarks">Remarks</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="dental-certificates-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="dental-certificates-table_previous"><a href="#" aria-controls="dental-certificates-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="dental-certificates-table_next"><a href="#" aria-controls="dental-certificates-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="dental-certificates-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="dental-certificates-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="dental-certificates-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border ">
		<div class="pull-right">
												<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-backdrop="static" data-target="#prescription-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription"><span class="fa fa-plus"></span> &nbsp;Add Prescription</button>
									</div>
		<a data-toggle="collapse" href="#prescription" style="color:#444" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-medkit" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Prescriptions <span style="font-size: 10pt !important; color:#e50000;">(BETA)</span>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="prescription-count clinic-patient-count"> 0</span><br>
					<span style="font-size: 10pt !important">Your patient's prescription list</span>
				</div>
			</span>

		</a>
	</div>
	<div id="prescription" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="prescription">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<div id="prescription-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="prescription-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="prescription-table"></label></div></div><div id="prescription-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="prescription-table" width="100%" role="grid" style="width: 100%;">
						     <thead>
						         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 10px;">No.</th><th class="sorting" tabindex="0" aria-controls="prescription-table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 120px;">Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Instructions">Instructions</th><th class="sorting_desc" tabindex="0" aria-controls="prescription-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Last Updated: activate to sort column ascending" style="width: 150px;">Last Updated</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 80px;"></th></tr>
						     </thead>
						<tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="prescription-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="prescription-table_previous"><a href="#" aria-controls="prescription-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="prescription-table_next"><a href="#" aria-controls="prescription-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="prescription-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="prescription-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="prescription-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border ">
		<div class="pull-right">
							<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#appointment-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/appointment"><span class="fa fa-plus"></span> &nbsp;Add Appointment</button>
					</div>
		<a data-toggle="collapse" href="#appointment" style="color:#444" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Appointment Schedule&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="appointment-count clinic-patient-count"> 1</span><br>
					<span style="font-size: 10pt !important">Your patient's next appointment list</span>
				</div>
			</span>
		</a>
	</div>
	<div id="appointment" class="panel-collapse collapse" aria-expanded="true" data-deeploader="appointment">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-inline pull-right">
						<div class="form-group">
							<label for="appointment_sort">Sort By:</label>
							<select class="form-control" id="appointment_sort" style="width:150px" name="appointment_sort"><option value="1">All</option><option value="2" selected="selected">Upcoming</option><option value="3">Past</option></select>
						</div>
						                        	<div class="form-group">
                                <select class="form-control select2 clinic_user_id_option select2-hidden-accessible" id="clinic_user_id_option" style="width:250px" name="clinic_user_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 250px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-clinic_user_id_option-container"><span class="select2-selection__rendered" id="select2-clinic_user_id_option-container"><span class="select2-selection__placeholder"> - All Dentist - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>
		                					</div>
				</div>
				<div class="col-md-12">
					<div class="table-responsive">
						<div id="appointment-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"></div><div id="appointment-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary nowrap dataTable no-footer" cellspacing="0" id="appointment-table" width="100%" role="grid" style="width: 100%;">
						     <thead>
						         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 10px;">No.</th><th class="sorting_asc" tabindex="0" aria-controls="appointment-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 90px;">Date</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Time" style="width: 120px;">Time</th><th class="sorting" tabindex="0" aria-controls="appointment-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 100px;">Status</th><th class="sorting" tabindex="0" aria-controls="appointment-table" rowspan="1" colspan="1" aria-label="Last Updated: activate to sort column ascending" style="width: 170px;">Last Updated</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Notes">Notes</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 60px;"></th></tr>
						     </thead>
						<tbody><tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="appointment-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="appointment-table_previous"><a href="#" aria-controls="appointment-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="appointment-table_next"><a href="#" aria-controls="appointment-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="appointment-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="appointment-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="appointment-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border patient-panel">
		<div class="pull-right">
							<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#photo-modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-photo" data-filename="https://web.dentalclinicapp.com/uploads/no_pic.jpg"><span class="fa fa-plus"></span> &nbsp;Add Photos</button>
					</div>
		<a data-toggle="collapse" href="#photos" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-photo" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span>Photos&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="photo_count clinic-patient-count"> 1</span><br>
					<span style="font-size: 10pt !important">Your patient's dental photos for reference</span>
				</div>
			</span>
		</a>
	</div>
	<div id="photos" class="panel-collapse collapse" aria-expanded="true" style="" data-deeploader="dental_photo">
		<div class="box-body">
			<div class="table-responsive">
				<div id="photo-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="top"><div id="photo-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="photo-table"></label></div></div><div id="photo-table_processing" class="dataTables_processing" style="display: none;">Processing...</div><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="photo-table" width="100%" role="grid" style="width: 100%;">
				     <thead>
				         <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 15px;">No.</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Photos" style="width: 150px;">Photos</th><th class="sorting" tabindex="0" aria-controls="photo-table" rowspan="1" colspan="1" aria-label="Date Created: activate to sort column ascending" style="width: 150px;">Date Created</th><th class="sorting_desc" tabindex="0" aria-controls="photo-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Last Updated: activate to sort column ascending" style="width: 150px;">Last Updated</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Caption">Caption</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 80px;"></th></tr>
				     </thead>
				<tbody><tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"><div class="dataTables_paginate paging_simple_numbers" id="photo-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="photo-table_previous"><a href="#" aria-controls="photo-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="photo-table_next"><a href="#" aria-controls="photo-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div>
			</div>
		</div>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="photo-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="photo-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="photo-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>										<div class="box box-primary">
	<div class="box-header with-border">
		<div class="pull-right">
							<button class="btn btn-sm clinic-btn-magenta" data-toggle="modal" data-target="#payment-modal" id="payment-modal-btn" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment" data-method="POST"><span class="fa fa-plus"></span> &nbsp;Add payments</button>
					</div>
		<a data-toggle="collapse" href="#payments" style="color:#444" class="" aria-expanded="true">
			<span class="clinic-box-title">
				<div class="pull-left clinic-box-icon-header">
					<i class="fa fa-money" aria-hidden="true"></i> &nbsp;
				</div>
				<div class="pull-left clinic-box-patient-header">
					<span id="payment-header">
						Payments &nbsp;&nbsp;-&nbsp;&nbsp;
						Total Payment: <span id="total_payment">5,000,000.00</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Total Balance: <span id="total_balance">0.00</span>
					</span><br>
					<span style="font-size: 10pt !important">Your patient's payments list</span>
				</div>
			</span>
		</a>
	</div>
	<div id="payments" class="panel-collapse collapse" aria-expanded="true" data-deeploader="dental_payment">
		<div class="box-body">
			<div class="">
			    <ul class="nav nav-tabs">
			        <li class="active" id="full_payment_tab"><a href="#tab_1" data-toggle="tab">Full Payment</a></li>
			        <li id="installment_tab"><a href="#tab_2" data-toggle="tab" data-installment="true">Installment</a></li>
			    </ul>
			    <div class="tab-content">
			        <div class="tab-pane active" id="tab_1">
			        	<br>
			        	<div class="table-responsive">
				        	<div id="payment-table-cash_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="payment-table-cash_length"><label>Show <select name="payment-table-cash_length" aria-controls="payment-table-cash" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="payment-table-cash_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="payment-table-cash"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="payment-table-cash" width="100%" role="grid" aria-describedby="payment-table-cash_info" style="width: 100%;">
							     <thead>
							        <tr role="row"><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="No." style="width: 10px;">No.</th><th class="sorting" tabindex="0" aria-controls="payment-table-cash" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending">Details</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Tooth No./Procedures">Tooth No./Procedures</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 250px;" aria-label="Remarks">Remarks</th><th class="text-center sorting_desc" rowspan="1" colspan="1" style="width: 60px;" aria-label=""></th></tr>
							     </thead>
							<tbody><tr role="row" class="odd"><td class=" text-center">1</td><td><b>Date:</b>&nbsp;<span style="font-size:12pt;">Oct 25, 2022</span><br><b>Payment Method:</b>&nbsp;<span style="font-size:12pt;">Cash</span><br><b>Dentist In-charge:</b>&nbsp;<span style="font-size:12pt;">Dr. Feri Rimanda</span><br><b>Last Updated:&nbsp;</b>Oct 25, 2022 at 4:53 PM<br></td><td>1 - tambal gigi</td><td></td><td class="text-center sorting_1"><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#payment-modal" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment/XNJNL8OPe7" data-method="PUT" data-edit-url="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment/XNJNL8OPe7/edit"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></button>&nbsp;&nbsp;<a href="#delete" class="btn btn-danger btn-xs" id="btn-payment-delete" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment/XNJNL8OPe7" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a></td></tr></tbody></table><div id="payment-table-cash_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="payment-table-cash_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_input input-pagination" id="payment-table-cash_paginate" style="display: none;"><a class="paginate_button first disabled btn btn-primary btn-sm btn-flat">First</a><a class="paginate_button previous disabled  btn btn-primary btn-sm btn-flat" id="payment-table-cash_previous">Previous</a><span class="paginate_page">Page </span><input class="paginate_input form-control input-sm" size="5" type="text"><span class="paginate_of"></span><a class="paginate_button next  btn btn-primary btn-sm btn-flat" id="payment-table-cash_next">Next</a><a class="paginate_button last  btn btn-primary btn-sm btn-flat" id="payment-table-cash_last">Last</a></div></div></div></div>
						</div>
			        </div>
			        <div class="tab-pane" id="tab_2">
			        	<div class="row">
			        		<br>
				        	<div class="col-md-12">
								<div class="form-inline pull-right">
									<div class="form-group">
										<label for="payment_sort">Sort By:</label>
										<select class="form-control" id="payment_sort" style="width:150px" name="payment_sort"><option value="updated_at" selected="selected">Last Updated</option><option value="payment_date">Payment Date</option></select>
									</div>
									&nbsp;&nbsp;
									<div class="form-group">
										<label for="payment_order">Order By:</label>
										<select class="form-control" id="payment_order" style="width:150px" name="payment_order"><option value="asc">Ascending</option><option value="desc" selected="selected">Descending</option></select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
					        	<div class="table-responsive">
						        	<div id="payment-installment-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="payment-installment-table" style="width: 100%;" class="table table-bordered clinic-table-primary dataTable no-footer" role="grid">
									     <thead>
									         <tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 10px;">No.</th><th class="sorting_disabled" rowspan="1" colspan="1">Details</th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 80px;"></th></tr>
									     </thead>
									<tbody><tr class="odd"><td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr></tbody></table><div id="payment-installment-table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="payment-installment-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="payment-installment-table_previous"><a href="#" aria-controls="payment-installment-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="payment-installment-table_next"><a href="#" aria-controls="payment-installment-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div></div>
								</div>
							</div>
						</div>
			        </div>
			    </div>
			</div>
		</div>
		<a style="visibility: none;" href="#view-installment" id="installment-plan-report-btn-modal" data-toggle="modal" data-target="#list-installment-modal" data-datatable_url="https://web.dentalclinicapp.com/clinic/patient/payment/installment-payment-data" data-add_payment_action="'.route('patient.installment-payment.store', [$patient_hashid, Input::get('payment_id')]).'">&nbsp;</a>
		<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="payment-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="payment-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;"></th></tr>
             </thead>
        <tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No logs found.</td></tr></tbody></table><div id="payment-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
	</div>
</div>				
						<div class="box box-warning">
    <div class="box-header with-border">
        <h1 class="box-title"><i class="fa fa-history"></i> Logs</h1>
    </div>
    <div class="box-body td-logs" style="padding-top: 0 !important">
        <div id="patient-users-logs-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="dataTable no-footer" id="patient-users-logs-table" width="100%" role="grid" style="width: 100%;">
             <thead>
                 <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 122px;" aria-label=""></th></tr>
             </thead>
        <tbody><tr role="row" class="odd"><td>Nov 02, 2022 at 10:11 AM - Add by pt.ugs1988@gmail.com </td></tr><tr role="row" class="even"><td>Nov 02, 2022 at 10:11 AM - Add by pt.ugs1988@gmail.com </td></tr><tr role="row" class="odd"><td>Nov 01, 2022 at 10:56 AM - Edit by pt.ugs1988@gmail.com </td></tr></tbody></table><div id="patient-users-logs-table_processing" class="dataTables_processing" style="display: none;">Loading. Please wait...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
    </div>
</div>
		</section>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="medical-history-modal" role="dialog" aria-labelledby="myModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/medical-history" accept-charset="UTF-8" role="form" id="medical-history-form"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="PUT">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-medkit"></span> Medical History</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" id="medical_history_textarea">
                        <div class="form-group">
                            <ul class="wysihtml5-toolbar" style=""><li>
  <div class="btn-group">
    <a class="btn btn-sm btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn btn-sm btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn btn-sm btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
    
  </div>
</li>
<li>
  <div class="btn-group">
    <a class="btn btn-sm btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="fa fa-list-ul"></span>
    
    </a>
    <a class="btn btn-sm btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="fa fa-list-ol"></span>
    
    </a>
    <a class="btn btn-sm btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="fa fa-outdent"></span>
    
    </a>
    <a class="btn btn-sm btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="fa fa-indent"></span>
    
    </a>
  </div>
</li>
</ul><textarea class="form-control" rows="5" id="medical_history" name="medical_history" style="display: none;">&lt;p&gt;ini adalah anamnesa pertama&lt;/p&gt;</textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(210, 214, 222); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 6px 12px; position: static; inset: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: auto;"></iframe>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving..." id="btn_save_history"><i class="fa fa-save"></i>&nbsp;Save Medical History</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="medical-history-file-modal" role="dialog" aria-labelledby="myModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr" accept-charset="UTF-8" id="medical-history-file-form" role="form" class="form-horizontal clinic-text-gray" enctype="multipart/form-data"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-photo"></span> Add Medical History Document</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="kv-avatar center-block" style="width:200px">
                            <input class="file-loading" id="history_photo" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ttf" name="file" type="file">
                            <input id="history_snapshot" name="history_snapshot" type="hidden">
                            <input id="_file_name" name="_file_name" type="hidden">
                            <div style="font-size:12px; color:#dd4b39; text-align:center">Note: Max File size is 10MB</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-horizontal">
                            <div class="form-group">
                            <label for="history_remarks" class="col-md-2 clinic-text-gray">Remarks :</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="history_remarks" name="remarks" style="resize: none"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="history_file_btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Document&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="treatment-plan-modal" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/treatment-plan" accept-charset="UTF-8" role="form" id="treatment-plan-form" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Treatment Plan</h4>
                <button class="btn clinic-btn-magenta btn-xs" id="treatment_plan_go_to_dental_chart" data-from="treatment-plan" type="button" data-toggle="modal" data-target="#dental-chart-modal" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/treatment-plan" data-method="POST">Add Tooth Number</button>
            </div>
            <div class="modal-body">
                <div class="loader text-center" style="display: none;">
                    <div>
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12 clinic-text-gray" id="treatment_plan_tooth_name"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="clinic-text-gray">Date : &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon" style="padding:0 10px 0 10px">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control input-datepicker hasDatepicker" id="treatment_date" name="treatment_date" type="text" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="clinic-text-gray">Treatment Plan Name : &nbsp;</label>
                                <input class="form-control" id="treatment_plan_name" autocomplete="off" name="treatment_name" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 procedure-form">
                            <div class="form-group">
                                <label for="procedure_ids" class="clinic-text-gray">Procedures :</label>
                                <!-- <br> -->
                                <button class="btn btn-info btn-flat btn-sm add-procedure-amount" type="button">Add Procedure</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notes" class="clinic-text-gray">Other Notes :</label>
                                <textarea class="form-control" rows="4" style="resize:none" id="treatment_notes" name="treatment_notes" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <input id="treatment_plan_chart_name" name="treatment_plan_chart_name" type="hidden" value="">
                    <input id="treatment_plan_chart_id" name="treatment_plan_chart_id" type="hidden" value="">
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_treatment" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Treatment Plan&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade bs-example-modal-md in" id="dental-chart-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: block; padding-right: 17px;" aria-hidden="false">
    <div class="modal-dialog modal-md chart_modal_dialog">
    	<div class="view_chart_header" style="display: none;">
        	<div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close close_chart" aria-label="Close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-bar-chart"></span>&nbsp; View Dental Chart</h4>
            </div>
        </div>
        <div class="add_chart_header" style="">
        	<div class="modal-header clinic-modal-header">
        		<div class="pull-left">
        			<h4 class="modal-title" id="myModalLabel"><b><span class="number_selected">1 selected</span></b></h4>
        		</div>
        		<div class="pull-right">
        			<button class="btn clinic-btn-magenta add_btn_chart" type="button"><span class="fa fa-plus"></span>&nbsp; ADD</button>
        			<button type="button" class="btn clinic-btn-magenta close_multiple"><span class="fa fa-times"></span></button>
        		</div>
            </div>
        </div>
        <div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="adult_tab active"><a href="#adult" aria-controls="adult" role="tab" class="adult-tab" aria-expanded="true" data-toggle="tab"><b>Adult</b></a></li>
				    <li role="presentation" class="ped_tab"><a href="#pediatric" aria-controls="pediatric" role="tab" class="pediatric-tab" aria-expanded="false" data-toggle="tab"><b>Pediatric</b></a></li>
			  	</ul>
		    	<br>
			  	<div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="adult">
						<div class="text-center">
							<div class="loading-backdrop hide" id="spin-loading-adult">
								<div style="position: absolute;left: 0;right: 0;bottom:0%;top:45%;margin: auto;z-index:2">
									<i class="fa fa-spinner fa-pulse fa-5x text-primary"> </i>
								</div>
							</div>
							
							<div class="adult img-responsive maphilighted" style="display: block; background: url(&quot;https://web.dentalclinicapp.com/uploads/universal_chart.jpg&quot;) 0% 0% / cover; position: relative; padding: 0px; width: 308px; height: 377px;"><canvas style="width: 308px; height: 377px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;" width="308" height="377"></canvas><canvas style="width: 308px; height: 377px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;" height="377" width="308"></canvas><img class="adult img-responsive maphilighted" src="https://web.dentalclinicapp.com/uploads/universal_chart.jpg" usemap="#chart" alt="" style="opacity: 0; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;"></div>
							<map name="chart" class="maphilight dental_chart">
								<area id="1" data-chart-name="1" alt="" title="" shape="poly" coords="44,147,51,147,58,148,64,150,69,153,73,158,75,163,76,166,74,170,72,174,67,177,64,180,56,183,51,183,44,183,37,180,34,177,32,174,31,169,31,163,32,157,35,151,39,149" data-highlight="true">
								<area id="2" data-chart-name="2" alt="" title="" shape="poly" coords="44,147,41,144,39,140,38,135,39,130,39,125,42,121,45,118,49,118,52,118,61,121,70,125,76,129,81,135,81,140,79,143,75,148,63,150,51,146">
								<area id="3" data-chart-name="3" alt="" title="" shape="poly" coords="51,117,62,122,70,123,77,123,82,123,86,121,88,117,88,112,86,107,83,101,79,99,72,97,61,93,54,93,50,96,48,100,47,106,48,110,48,114">
								<area id="4" data-chart-name="4" alt="" title="" shape="poly" coords="61,93,59,89,59,85,58,79,59,75,61,71,66,68,73,68,81,70,91,76,93,76,95,80,95,84,93,89,89,94,85,97,78,97,74,97">
								<area id="5" data-chart-name="5" alt="" title="" shape="poly" coords="73,68,83,71,91,76,96,76,100,74,103,73,108,69,110,63,109,58,106,53,91,46,85,46,80,46,75,50,73,56,73,68">
								<area id="6" data-chart-name="6" alt="" title="" shape="poly" coords="86,43,87,39,89,34,93,30,98,28,104,28,108,31,117,43,119,44,119,51,117,54,111,54,106,54,89,46">
								<area id="7" data-chart-name="7" alt="" title="" shape="poly" coords="107,30,106,27,109,22,114,18,121,17,126,17,130,25,132,32,132,38,129,43,125,44,120,44,118,43">
								<area id="8" data-chart-name="8" alt="" title="" shape="poly" coords="130,14,130,25,133,33,136,37,140,39,145,39,150,37,152,35,154,23,154,11,148,9,141,9,135,10" data-highlight="true">
								<area id="9" data-chart-name="9" alt="" title="" shape="poly" coords="155,12,155,23,155,29,156,35,158,39,163,41,169,41,173,39,177,32,178,25,179,14,175,11,168,9,160,10">
								<area id="10" data-chart-name="10" alt="" title="" shape="poly" coords="183,17,180,23,179,27,177,33,177,40,179,44,182,46,187,46,190,45,194,41,202,30,203,27,199,22,195,18,189,17">
								<area id="11" data-chart-name="11" alt="" title="" shape="poly" coords="190,45,191,51,192,54,196,56,200,56,202,55,219,47,223,43,221,37,218,33,215,29,211,28,207,28,203,30">
								<area id="12" data-chart-name="12" alt="" title="" shape="poly" coords="219,46,225,46,231,48,235,51,236,57,236,62,236,68,218,76,213,76,208,74,203,70,200,64,201,59,203,55">
								<area id="13" data-chart-name="13" alt="" title="" shape="poly" coords="216,77,221,75,236,68,242,68,247,70,250,73,251,76,251,83,250,88,249,92,247,94,235,98,223,97,217,90,214,83,216,77">
								<area id="14" data-chart-name="14" alt="" title="" shape="poly" coords="228,101,234,98,249,94,254,93,258,95,261,100,262,104,262,108,261,113,258,118,245,123,234,123,227,123,223,121,221,117,222,111,226,103,227,102">
								<area id="15" data-chart-name="15" alt="" title="" shape="poly" coords="243,124,259,118,263,118,267,121,270,126,271,131,271,137,270,140,269,145,264,148,244,150,234,148,229,141,229,136,232,130,242,125">
								<area id="16" data-chart-name="16" alt="" title="" shape="poly" coords="244,151,238,156,236,159,234,164,234,170,239,176,244,179,253,184,261,184,268,182,274,178,278,174,279,163,276,154,270,149,265,148,246,150">
								<area id="17" data-chart-name="17" alt="" title="" shape="poly" coords="250,202,246,206,242,212,239,219,238,226,241,232,246,235,261,237,272,236,279,233,284,227,285,220,284,215,271,203,261,200,251,201">
								<area id="18" data-chart-name="18" alt="" title="" shape="poly" coords="245,235,240,237,237,240,234,246,233,254,233,257,245,264,257,269,263,271,268,265,274,256,274,248,272,243,263,238,245,235">
								<area id="19" data-chart-name="19" alt="" title="" shape="poly" coords="232,264,245,264,255,267,258,273,262,276,263,281,262,285,258,291,252,298,242,295,231,289,227,284,225,278,226,272,230,264">
								<area id="20" data-chart-name="20" alt="" title="" shape="poly" coords="226,291,235,293,242,296,249,301,251,304,251,308,248,312,243,317,238,317,220,309,218,305,219,300,221,296,226,291">
								<area id="21" data-chart-name="21" alt="" title="" shape="poly" coords="209,323,206,317,207,313,211,310,215,308,220,308,239,318,239,324,235,329,231,332,225,335,209,324">
								<area id="22" data-chart-name="22" alt="" title="" shape="poly" coords="194,332,199,337,203,345,204,349,212,350,218,349,222,346,224,342,225,336,208,323,204,321,199,322,196,323,194,326,194,332">
								<area id="23" data-chart-name="23" alt="" title="" shape="poly" coords="194,332,201,340,204,348,205,351,197,358,190,359,186,359,182,353,181,345,179,340,176,337,178,332,182,330,188,330,192,332">
								<area id="24" data-chart-name="24" alt="" title="" shape="poly" coords="175,337,179,340,181,346,182,354,182,359,178,363,171,364,164,362,160,359,158,353,158,346,159,339,162,336,168,335,175,337">
								<area id="25" data-chart-name="25" alt="" title="" shape="poly" coords="155,340,157,345,156,352,154,359,150,363,144,365,137,363,132,360,132,355,132,346,135,341,139,337,144,336,147,335,151,336,155,339">
								<area id="26" data-chart-name="26" alt="" title="" shape="poly" coords="110,349,110,352,116,357,122,360,128,360,131,355,132,345,134,341,138,337,136,332,131,330,127,329,122,331,110,348">
								<area id="27" data-chart-name="26" alt="" title="" shape="poly" coords="89,336,106,323,111,322,115,322,120,323,122,326,122,331,109,349,103,350,96,350,91,345,90,341,89,337">
								<area id="28" data-chart-name="28" alt="" title="" shape="poly" coords="76,317,75,322,77,327,81,330,89,336,106,323,109,317,108,313,104,310,99,308,94,309,76,317">
								<area id="29" data-chart-name="29" alt="" title="" shape="poly" coords="70,297,75,295,80,293,88,291,93,295,96,300,96,305,94,309,76,318,71,317,66,312,63,308,63,304,65,300,69,297">
								<area id="30" data-chart-name="30" alt="" title="" shape="poly" coords="62,299,72,295,80,291,85,287,88,284,89,276,84,265,79,264,72,264,66,265,58,269,56,272,53,275,51,279,52,286,57,293">
								<area id="31" data-chart-name="31" alt="" title="" shape="poly" coords="48,240,55,237,64,235,75,237,79,241,80,246,81,250,81,254,81,258,70,264,52,271,45,264,41,255,40,248,42,243,47,240">
								<area id="32" data-chart-name="32" alt="" title="" shape="poly" coords="53,199,46,202,41,204,36,209,30,214,29,221,31,227,35,232,40,236,46,237,54,238,67,236,73,234,76,228,76,222,73,214,70,208,66,203,61,200,54,199">       
							</map>
						</div>
			    	</div>
			    	<div role="tabpanel" class="tab-pane" id="pediatric">
				    	<div class="text-center">
				    		<div class="loading-backdrop hide" id="spin-loading-pediatric">
				    			<div style="position: absolute;left: 0;right: 0;bottom:0%;top:45%;margin: auto;z-index:2">
				    				<i class="fa fa-spinner fa-pulse fa-5x text-primary"> </i>
				    			</div>
				    		</div>
					    	<div class="pediatric img-responsive maphilighted" style="display: block; background: url(&quot;https://web.dentalclinicapp.com/uploads/pediatric.png&quot;) 0% 0% / cover; position: relative; padding: 0px; width: 308px; height: 377px;"><canvas style="width: 308px; height: 377px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;" height="377" width="308"></canvas><img class="pediatric img-responsive maphilighted" src="https://web.dentalclinicapp.com/uploads/pediatric.png" usemap="#chart2" alt="" style="opacity: 0; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;"></div>
					        <map name="chart2" class="maphilight_pediatric dental_chart">
					            
					            <area id="33" data-chart-name="A" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="34" data-chart-name="B" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					           
					            <area id="35" data-chart-name="C" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="36" data-chart-name="D" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="37" data-chart-name="E" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="38" data-chart-name="F" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="39" data-chart-name="G" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="40" data-chart-name="H" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="41" data-chart-name="I" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="42" data-chart-name="J" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            
					            <area id="43" data-chart-name="K" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="44" data-chart-name="L" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="45" data-chart-name="M" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="46" data-chart-name="N" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="47" data-chart-name="O" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="48" data-chart-name="P" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="49" data-chart-name="Q" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="50" data-chart-name="R" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="51" data-chart-name="S" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					            
					            <area id="52" data-chart-name="T" alt="" title="" shape="poly" coords="0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0">
					        </map>
				        </div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
</div><div class="modal fade bs-example-modal-md" id="chart-note-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-list-alt"></span> View Dental Note -&nbsp;<span>(<b id="dental_tooth_name">Tooth Number: 8</b>)</span></h4>
            </div>
			<div class="modal-body">
				<table class="clinic-table-custom clinic-table-primary no-footer" id="dental-chart-notes-table" width="100%" role="grid" style="">
				     
				<tbody><tr role="row" class=""><td class=" text-center"><div class="image" style="color:#11c1f3">
                                            <span class="fa fa-circle"></span> 
                                        </div></td><td><div class="info">
                                            <span><b class="clinic-text-gray">Notes: </b> test</span><br>
                                            <span><b class="clinic-text-gray">Note Date: </b> Nov 02, 2022</span><br>
                                            <span><b class="clinic-text-gray">Last Updated: </b> Nov 02, 2022 at 10:11 AM - Dr. Feri Rimanda</span>
                                        </div></td><td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#dental-notes-modal" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes/a6oqE1kOoO" data-details="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes/a6oqE1kOoO" data-method="PUT"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></button>
                                                &nbsp;&nbsp;<a href="#delete" class="btn btn-xs btn-danger" id="btn-chart-delete" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes/a6oqE1kOoO" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a></td></tr></tbody><thead>
				         <tr role="row"><td class="text-center" rowspan="1" colspan="1" style="width: 49px;" aria-label=""></td><td class="" rowspan="1" colspan="1" style="width: 378px;" aria-label=""></td><td class="" rowspan="1" colspan="1" style="width: 78px;" aria-label=""></td></tr>
				     </thead></table>
			</div>
			<div class="modal-footer">
				<input id="chart_id_val" type="hidden" value="8">
				<input id="chart_name_val" type="hidden" value="8">
				<div class="pull-right">
					<button class="btn btn-primary btn-sm" id="btn-add-another-note"><span class="fa fa-plus"></span> &nbsp;Add Another Note</button>
				</div>
			</div>
		</div>
	</div>
</div><!-- Modal -->
<div class="modal fade" id="dental-notes-modal" role="dialog" aria-labelledby="myModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes" accept-charset="UTF-8" role="form" id="dental-notes-form" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Dental Notes</h4>
                <button class="btn clinic-btn-magenta btn-xs" id="go_to_dental_chart" type="button" data-toggle="modal" data-target="#dental-chart-modal" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes" data-method="POST">Add Tooth Number</button>
            </div>
            <div class="modal-body">
                <div class="loader text-center" style="display: none;">
                    <div>
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12 clinic-text-gray" id="tooth_name"><label>Tooth Number: &nbsp;</label>2</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="clinic-text-gray">Note Date : &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon" style="padding:0 10px 0 10px">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control input-datepicker hasDatepicker" id="note_date" name="note_date" type="text" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" id="colorField">
                                <label class="clinic-text-gray">Choose a Color :</label><br>
                                <div data-toggle="buttons">
                                    <label class="btn" style="background-color:#7F8C8D;">
                                        <input type="radio" name="color_code" autocomplete="off" value="7F8C8D" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#ffc900">
                                        <input type="radio" name="color_code" autocomplete="off" value="ffc900" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#ef473a">
                                        <input type="radio" name="color_code" autocomplete="off" value="ef473a" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#33cd5f">
                                        <input type="radio" name="color_code" autocomplete="off" value="33cd5f" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#11c1f3">
                                        <input type="radio" name="color_code" autocomplete="off" value="11c1f3" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#F39C12">
                                        <input type="radio" name="color_code" autocomplete="off" value="F39C12" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#2E3E51">
                                        <input type="radio" name="color_code" autocomplete="off" value="2E3E51" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#FDAEC6">
                                        <input type="radio" name="color_code" autocomplete="off" value="FDAEC6" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label class="btn" style="background-color:#8D6EB1">
                                        <input type="radio" name="color_code" autocomplete="off" value="8D6EB1" class="radio-inline"> &nbsp;&nbsp;&nbsp;
                                    </label>
                                </div>
                                <div class="inline-message">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="procedure_ids" class="clinic-text-gray">Procedure :</label>
                                <div class="input-group">
                                    <select class="form-control select2 select2-hidden-accessible" id="procedure_id" style="width:100%;" multiple="" name="procedure_ids[]" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder=" - Select - " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="input-group-btn">
                                        <button class="btn btn-flat btn-primary" data-target="#procedure-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/procedures"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notes" class="clinic-text-gray">Notes :</label>
                                <textarea class="form-control" rows="4" style="resize:none" id="notes" name="notes" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <input id="chart_name" name="chart_name" type="hidden" value="2">
                    <input id="chart_id" name="chart_id" type="hidden" value="2">
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="btn_save_notes" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Notes&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="request-forms-modal" role="dialog" aria-labelledby="myRequestFormsLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/request-forms" accept-charset="UTF-8" role="form" id="request-forms-form" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myRequestFormsLabel"><i class="fa fa-plus-circle"></i> Add Request</h4>
            </div>
            <div class="modal-body">
                <div class="loader text-center" style="display: none;">
                    <div>
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12 clinic-text-gray" id="tooth_name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="clinic-text-gray">Request Date : <i class="asterisk" style="color:red;">*</i></label>
                                <div class="input-group">
                                    <div class="input-group-addon" style="padding:0 10px 0 10px">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control input-datepicker hasDatepicker" id="request_date" name="request_date" type="text" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notes" class="clinic-text-gray">Requests : <i class="asterisk" style="color:red;">*</i></label>
                                <textarea class="form-control" rows="4" style="resize:none" id="requests" name="requests" cols="50"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notes" class="clinic-text-gray">Remarks :</label>
                                <textarea class="form-control" rows="4" style="resize:none" id="request_remarks" name="remarks" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="btn_save_request_forms" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Request&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="dental-certificates-modal" role="dialog" aria-labelledby="mydentalCertificatesLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-certificates" accept-charset="UTF-8" role="form" id="dental-certificates-form" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="mydentalCertificatesLabel"><i class="fa fa-plus-circle"></i> Add Certificate</h4>
            </div>
            <div class="modal-body">
                <div class="loader text-center" style="display: none;">
                    <div>
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12 clinic-text-gray" id="tooth_name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="clinic-text-gray">Signed Date : <i class="asterisk" style="color:red;">*</i></label>
                                <div class="input-group">
                                    <div class="input-group-addon" style="padding:0 10px 0 10px">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control input-datepicker hasDatepicker" id="certificate_date" name="certificate_date" type="text" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="procedure_ids" class="clinic-text-gray">Procedure : <i class="asterisk" style="color:red;">*</i></label>
                                <div class="input-group">
                                    <select class="form-control select2 select2-hidden-accessible" id="certificate_procedure_id" style="width:100%;" multiple="" name="procedure_ids[]" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder=" - Select - " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="input-group-btn">
                                        <button class="btn btn-flat btn-primary" data-target="#procedure-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/procedures"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notes" class="clinic-text-gray">Remarks :</label>
                                <textarea class="form-control" rows="4" style="resize:none" id="certificate_remarks" name="remarks" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="btn_save_dental_certificates" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Request&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="appointment-modal" role="dialog" aria-labelledby="myModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/appointment" accept-charset="UTF-8" role="form" id="appointment-form" class="clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
<input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i>&nbsp; Add Appointment</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="_name">Patient Name :</label>
                            <input class="form-control" readonly="" name="_name" type="text" value="Feri Rimanda Kim" id="_name">
                            <input name="patient_id" type="hidden" value="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="appointment_date">Date :</label>
                            <div class="input-group">
                                <div class="input-group-addon" style="padding:0 10px 0 10px">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control input-datepicker hasDatepicker" id="appointment_date" name="appointment_date" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="time_container">
                    <div class="col-md-6">
                        <div class="form-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">09</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                            <label for="appointment_time">Start Time:</label>
                            <div class="input-group">
                                <div class="input-group-addon" style="padding:0 10px 0 10px">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input class="form-control timepicker" id="appointment_time" readonly="" name="appointment_time" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">10</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                            <label for="appointment_time_to">End Time:</label>
                            <div class="input-group">
                                <div class="input-group-addon" style="padding:0 10px 0 10px">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input class="form-control timepicker_to" id="appointment_time_to" readonly="" name="appointment_time_to" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" rows="5" style="resize:none" id="appointment_notes" name="notes" cols="50"></textarea>
                        </div>
                    </div>
                </div>
                                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="clinic_user_id">Dentist In-charge</label>
                                <select class="form-control select2 clinic_user_id select2-hidden-accessible" id="clinic_user_id" style="width:100%" name="clinic_user_id" tabindex="-1" aria-hidden="true"><option selected="selected" value="">Search Dentist...</option></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-clinic_user_id-container"><span class="select2-selection__rendered" id="select2-clinic_user_id-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </div>
                                <input name="role_type" type="hidden" value="1">
                <input name="user_id" type="hidden" value="47291">
                <input name="user_fullname" type="hidden" value="Dr. Feri Rimanda">
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_appointment" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Appointment&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<div class="modal fade" id="note-payments-list-modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">
                    <a data-toggle="collapse" href="#note-payments" style="color:#444" class="" aria-expanded="true">
                        <span class="clinic-box-title">
                            <div class="pull-left clinic-box-icon-header">
                                <i class="fa fa-money" aria-hidden="true"></i> &nbsp;
                            </div>
                            <div class="pull-left clinic-box-patient-header">
                                <span id="payment-header">
                                    Payments &nbsp;&nbsp;-&nbsp;&nbsp;
                                    Total Payment: <span id="note_total_payment">0.00</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Total Balance: <span id="note_total_balance">0.00</span>
                                </span><br>
                            </div>
                        </span>
                    </a>
                </h4>
            </div>
            <div class="modal-body">
                <div class="note-payment-loader" style="display: none;">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="row note-payment-content">
                    <div class="col-md-12">
                        <div id="note-payments" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <ul id="note-payment-tab" class="nav nav-tabs">
                                <li class="active" id="note_full_payment_tab"><a href="#note_tab_1" data-toggle="tab">Full Payment</a></li>
                                <li id="note_installment_tab"><a href="#note_tab_2" data-toggle="tab" data-installment="true">Installment</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="note_tab_1">
                                    <br>
                                    <div class="table-responsive">
                                        <div id="note-payment-table-cash_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="note-payment-table-cash_length"><label>Show <select name="note-payment-table-cash_length" aria-controls="note-payment-table-cash" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="note-payment-table-cash_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="note-payment-table-cash"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered clinic-table-primary dataTable no-footer" id="note-payment-table-cash" width="100%" role="grid" aria-describedby="note-payment-table-cash_info" style="width: 100%;">
                                             <thead>
                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 0px;">No.</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 0px;">Payment Method</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label="Last Updated: activate to sort column ascending" style="width: 0px;">Last Updated</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label="Remarks: activate to sort column ascending" style="width: 0px;">Remarks</th><th class="sorting" tabindex="0" aria-controls="note-payment-table-cash" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                             </thead>
                                        <tbody><tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr></tbody></table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="note-payment-table-cash_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="note-payment-table-cash_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="note-payment-table-cash_previous"><a href="#" aria-controls="note-payment-table-cash" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="note-payment-table-cash_next"><a href="#" aria-controls="note-payment-table-cash" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="note_tab_2">
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-inline pull-right">
                                                <div class="form-group">
                                                    <label for="note_payment_sort">Sort By:</label>
                                                    <select class="form-control" id="note_payment_sort" style="width:150px" name="note_payment_sort"><option value="updated_at" selected="selected">Last Updated</option><option value="payment_date">Payment Date</option></select>
                                                </div>
                                                &nbsp;&nbsp;
                                                <div class="form-group">
                                                    <label for="note_payment_order">Order By:</label>
                                                    <select class="form-control" id="note_payment_order" style="width:150px" name="note_payment_order"><option value="asc">Ascending</option><option value="desc" selected="selected">Descending</option></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <div id="note-payment-installment-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="note-payment-installment-table_length"><label>Show <select name="note-payment-installment-table_length" aria-controls="note-payment-installment-table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="note-payment-installment-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="note-payment-installment-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="note-payment-installment-table" style="width: 100%;" class="table table-bordered clinic-table-primary dataTable no-footer" role="grid" aria-describedby="note-payment-installment-table_info">
                                                     <thead>
                                                         <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="note-payment-installment-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 0px;">No.</th><th class="sorting" tabindex="0" aria-controls="note-payment-installment-table" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 0px;">Details</th><th class="sorting" tabindex="0" aria-controls="note-payment-installment-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                     </thead>
                                                <tbody><tr class="odd"><td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr></tbody></table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="note-payment-installment-table_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="note-payment-installment-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="note-payment-installment-table_previous"><a href="#" aria-controls="note-payment-installment-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="note-payment-installment-table_next"><a href="#" aria-controls="note-payment-installment-table" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->
<div class="modal fade" id="photo-modal" role="dialog" aria-labelledby="myModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-photo" accept-charset="UTF-8" role="form" id="photo-form" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-photo"></span> Add Dental Photos</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="kv-avatar center-block" style="width:200px">
                            <input class="file-loading" id="patient_photo" accept=".jpg,.jpeg,.png,.gif" name="image" type="file">
                            <input id="image_snapshot" name="image_snapshot" type="hidden">
                            <div style="font-size:12px; color:#dd4b39; text-align:center">Note: Max File size is 10MB</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-horizontal">
                            <div class="form-group">
                            <label for="caption" class="col-md-2 clinic-text-gray">Caption :</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="caption" name="caption" style="resize: none"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving..." id="btn_photo"><i class="fa fa-save"></i> &nbsp;Save Photo&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade" id="payment-modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Payments</h4>
            </div>
            <div class="modal-body">
                <div class="loader" style="display: none;">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="row form-content">
                    <input type="hidden" name="note_payment_id" id="note_payment_id" value="0">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active" id="li-cash"><a class="payment-pane" href="#payment_1" data-toggle="tab">Full Payment</a></li>
                            <li id="li-installment" class="payment-pane"><a href="#payment_2" data-toggle="tab" data-add_installment="true">Installment</a></li>
                        </ul>
                        <div class="tab-content">
                            <br style="clear:both;">
                                <div class="form-group" id="methodField">
                                    <div class="row" style="margin-bottom: 10px !important;">
                                        <div class="col-md-9">
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" data-toggle="modal" data-note_id="0" id="payment_select_note_btn" data-target="#payment-select-notes-modal" data-backdrop="static" data-method="POST" data-action="" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Select Note</a>
                                        </div>
                                    </div>
                                </div>
                                <br style="clear:both;">
                            <div class="tab-pane active col-md-12" id="payment_1">
                                <form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment" accept-charset="UTF-8" role="form" id="payment-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
                                <input name="_method" type="hidden" value="POST">
                                <div class="form-group" id="methodField">
                                    <div class="row">
                                        <input type="hidden" name="payment_selected_notes_id" id="payment_selected_notes_id_value" value="">
                                        <div class="col-md-12">
                                            <div id="payment_selected_details"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="methodField">
                                    <label>Payment Method</label>
                                    <div class="input-group">
                                        <select class="form-control select2 select2-hidden-accessible" id="method_id" style="width:100%;" name="method_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-method_id-container"><span class="select2-selection__rendered" id="select2-method_id-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <div class="input-group-btn">
                                            <a href="#payment-method" data-toggle="modal" data-target="#payment-method-modal" data-backdrop="static" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/payment-method" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <input class="form-control" id="cash_payment_method" name="method" type="hidden">
                                </div>
                                <div class="form-group" style="display: none;" id="insuranceField">
                                    <label>Insurance</label>
                                    <div class="input-group">
                                        <select class="form-control select2 select2-hidden-accessible" id="insurance_id" style="width:100%;" name="insurance_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-insurance_id-container"><span class="select2-selection__rendered" id="select2-insurance_id-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <div class="input-group-btn">
                                            <button class="btn btn-flat btn-primary" data-target="#insurance-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/insurance"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="dateField">
                                    <label>Date of Payment</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="payment_date" class="form-control hasDatepicker" name="payment_date" type="text">
                                    </div>
                                </div>
                                <div class="form-group" id="amountField">
                                    <label>Amount</label>
                                    <input class="form-control" id="amount" name="amount" type="number" min="0" autocomplete="off">
                                </div>
                                <div class="form-group" id="remarksField">
                                    <label>Remarks</label>
                                    <textarea class="form-control" id="remarks" style="height:100px;resize:none" name="remarks" cols="50" rows="10"></textarea>
                                </div>
                                                                    <div class="form-group" id="clinicUserIdField">
                                        <label>Dentist In-charge</label>
                                        <select class="form-control select2 clinic_user_id payment_user_id select2-hidden-accessible" style="width:100%" name="clinic_user_id" tabindex="-1" aria-hidden="true"><option selected="selected" value="">Search Dentist...</option></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-clinic_user_id-ma-container"><span class="select2-selection__rendered" id="select2-clinic_user_id-ma-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                                                <div class="form-group">
                                    <input type="hidden" name="payment_type" value="Cash">
                                    <input type="hidden" name="note_id" id="note_id" value="0">
                                    <input name="role_type" type="hidden" value="1">
                                    <input name="user_id" type="hidden" value="47291">
                                    <input name="user_fullname" type="hidden" value="Dr. Feri Rimanda">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn clinic-btn-magenta btn-loading" id="payment-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Payment&nbsp;&nbsp;&nbsp;</button>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane col-md-12" id="payment_2">
                                <form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/payment" accept-charset="UTF-8" role="form" id="installment-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
                                <input name="_method" type="hidden" value="POST">
                                <div class="form-group" id="methodField">
                                    <div class="row">
                                        <input type="hidden" name="payment_selected_notes_id" id="install_payment_selected_notes_id_value" value="">
                                        <div class="col-md-12">
                                            <div id="install_payment_selected_details"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="methodField">
                                    <label>Payment Method</label>
                                    <div class="input-group">
                                        <select class="form-control select2 select2-hidden-accessible" id="ins_method_id" style="width:100%;" name="method_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ins_method_id-container"><span class="select2-selection__rendered" id="select2-ins_method_id-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <div class="input-group-btn">
                                            <button class="btn btn-flat btn-primary" data-target="#payment-method-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/payment-method"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <input class="form-control" id="ins_payment_method" name="method" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label>Plan Name</label>
                                    <input type="text" name="plan_name" id="plan_name" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group" id="dateField">
                                    <label>Date of Payment</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="initial_payment_date" class="form-control hasDatepicker" name="payment_date" type="text">
                                    </div>
                                </div>
                                <div class="form-group" id="amountField">
                                    <label>Total Amount to be Paid</label>
                                    <input class="form-control" id="initial_amount" name="amount" type="number" min="0" autocomplete="off">
                                </div>
                                <div class="form-group" id="initial_remarksField">
                                    <label>Remarks</label>
                                    <textarea class="form-control" id="initial_remarks" style="height:100px;resize:none" name="remarks" cols="50" rows="10"></textarea>
                                </div>
                                <div class="form-group initial-div" style="padding: 5px 0px; display: none;">
                                    <label>Initial / Downpayment</label>
                                    <input class="form-control" id="initial_down" name="downpayment" type="number" min="0" autocomplete="off">
                                </div>
                                <div class="form-group initial-div" style="padding: 5px 0px; display: none;">
                                    <label>Initial Payment Remarks</label>
                                    <textarea class="form-control" id="initial_p_remarks" style="height:100px;resize:none" name="inital_remarks" cols="50" rows="10"></textarea>
                                </div>
                                                                    <div class="form-group" id="clinicUserIdField">
                                        <label>Dentist In-charge</label>
                                        <select class="form-control select2 clinic_user_id payment_user_id select2-hidden-accessible" style="width:100%" name="clinic_user_id" tabindex="-1" aria-hidden="true"><option selected="selected" value="">Search Dentist...</option></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-clinic_user_id-yj-container"><span class="select2-selection__rendered" id="select2-clinic_user_id-yj-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                                                <div class="form-group">
                                    <input type="hidden" name="payment_type" value="Installment">
                                    <input type="hidden" name="payment_id" id="initial_payment_id">
                                    <input type="hidden" name="note_id" id="initial_note_id" value="0">
                                    <input name="role_type" type="hidden" value="1">
                                    <input name="user_id" type="hidden" value="47291">
                                    <input name="user_fullname" type="hidden" value="Dr. Feri Rimanda">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn clinic-btn-magenta btn-loading" id="installment-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Installment&nbsp;&nbsp;&nbsp;</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><div class="modal fade" id="list-installment-modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="height: 50px;">
                <div class="pull-left">
                    <h4 class="modal-title"><i class="fa fa-list"></i>&nbsp;Installment payment</h4>
                </div>
                <div class="pull-right">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary btn-sm btn-flat pull-right" id="add-installment-payment-btn" data-toggle="modal" data-target="#installment-modal" data-method="POST"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add"></i> Add Payment</button>

                        <h4>Total amount to be paid: <span id="total_to_be_paid"></span> &nbsp;&nbsp;—&nbsp;&nbsp; Total balance: <span id="total_balance_amount"></span></h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered clinic-table-primary" id="installment-list-table" width="100%">
                                 <thead>
                                     <tr>
                                        <th>No.</th>
                                        <th>Date of Payment</th>
                                        <th>Method of Payment</th>
                                        <th>Total Amount</th>
                                        <th>Last Updated</th>
                                        <th>Remarks</th>
                                        <th></th>
                                     </tr>
                                 </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><div class="modal fade" id="installment-modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="modal-installment-header"><i class="fa fa-plus-circle"></i>&nbsp;Add Installment Payment</h4>
            </div>
            <form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr" accept-charset="UTF-8" id="installment-payment-form" role="form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
            <input name="_method" type="hidden" value="POST">
            <div class="modal-body">
                <div class="ins-loader" style="display: none;">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="row ins-form-content">
                    <div class="col-md-12">
                        <div class="tab-content col-md-12">
                            <div class="form-group" id="dateField">
                                <label>Date</label>
                                <div class="input-group">
                                    <div class="input-group-addon" style="padding:0 10px 0 10px">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="installment_date" class="form-control input-datepicker hasDatepicker" name="installment_date" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Payment Method</label>
                                <div class="input-group">
                                    <select class="form-control select2 select2-hidden-accessible" id="installment_method_id" style="width:100%;" name="method_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-installment_method_id-container"><span class="select2-selection__rendered" id="select2-installment_method_id-container"><span class="select2-selection__placeholder"> - Select - </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="input-group-btn">
                                        <button class="btn btn-flat btn-primary" data-target="#payment-method-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/payment-method"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" id="installment_amount" name="installment_amount" type="number" min="0">
                            </div>
                            <div class="form-group" id="remarksField">
                                <label>Remarks</label>
                                <textarea class="form-control" id="installment_remarks" style="height:100px;resize:none" name="installment_remarks" cols="50" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="balance_amount" id="balance_amount">
                <div class="col-md-12 text-center">
                    <button class="btn clinic-btn-magenta btn-loading" id="installment-payment-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Payment&nbsp;&nbsp;&nbsp;</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div><div class="modal fade" id="payment-select-notes-modal" role="dialog" aria-labelledby="myPaymentNotesModalLabel" data-backdrop="static">
    <div class="modal-dialog" style="width: 650px;">
        <div class="select_modal_dialog">
            <div class="modal-header clinic-modal-header clinic-text-gray" style="background-color: white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myPaymentNotesModalLabel"><i class="fa fa-check"></i> Select Dental Note</h4>
            </div>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">Note:</div>
                    <form id="payment-select-notes-form">
                        <input type="hidden" name="payment_notes_note_id" id="payment_notes_note_id">
                        <input type="hidden" name="selected_note_id" id="selected_note_id">
                        <div id="payment-select-notes-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="payment-select-notes-table" style="width: 100%" class="table table-striped table-hover dataTable no-footer" role="grid">
                             <thead>
                                 <tr role="row"><th class="text-right sorting_disabled td_note_checkbox" rowspan="1" colspan="1" style="width: 30px;"></th><th class="sorting_disabled" rowspan="1" colspan="1">Dental Notes</th></tr>
                             </thead>
                        <tbody><tr class="odd"><td valign="top" colspan="2" class="dataTables_empty">No data available in table</td></tr></tbody></table><div id="payment-select-notes-table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="background-color: white;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="payment-select-notes-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Selecting..."><i class="fa fa-check"></i> &nbsp;Select&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="photo-capture-modal" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-camera"></span> Photo Capture</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center">
                    <div id="photo_image"></div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary" id="photo_snapshot"><span class="fa fa-camera"></span> &nbsp;Take Snapshot&nbsp;</button>
                        <button class="btn btn-primary hide" id="photo_snapshot_again"><span class="fa fa-camera"></span> &nbsp;Take Again&nbsp;</button>
                        <button class="btn" id="photo_snapshot_close"> &nbsp;Close&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->
<div class="modal fade prescription" id="prescription-modal" tabindex="-1" role="dialog" aria-labelledby="myPrescriptionModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription" accept-charset="UTF-8" role="form" id="prescription-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myPrescriptionModalLabel"><i class="fa fa-pencil-square-o"></i> Prescription</h4>
            </div>
            <div class="modal-body">
                <div class="loader" style="display: none;">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="row form-content">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="prescription_date"><i class="asterisk" style="color:red;">*</i> Date :</label>
                            <div class="col-sm-9">
                               <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control input-datepicker hasDatepicker" id="prescription_date" data-mask="" name="prescription_date" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="drug_description"><i class="asterisk" style="color:red;">*</i> Drug Description:</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="drug_description" name="drug_description" type="hidden" value="">
                                <input class="form-control" id="drug_update" name="drug_update" type="hidden" value="">
                                <input class="form-control" id="prescription_id_value" name="prescription_id_value" type="hidden" value="">
                                <table class="table drug_desc">
                                    <tbody>
                                         <tr class="no_drug_details">
                                            <td><label class="label label-danger" style="color:#fff !important;">No drug details yet.</label></td>
                                        </tr>
                                        <tr class="with_drug_details" style="display: none;">
                                            <td colspan="2">
                                                <div id="drug-desc-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="clinic-table-custom dataTable no-footer" id="drug-desc-table" style="width: 100%" role="grid">
                                                     <thead>
                                                         <tr role="row"><th class="text-left sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 60px;"></th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 50px;"></th></tr>
                                                     </thead>
                                                <tbody><tr class="odd"><td valign="top" colspan="2" class="dataTables_empty">No data available in table</td></tr></tbody></table><div id="drug-desc-table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="100"><a class="btn btn-sm btn-flat btn-primary add-drug-btn" href="#prescription-drug-modal" data-toggle="modal" data-method="POST" data-action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription-drug"><i class="fa fa-plus-circle"></i> Add Drug</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group" id="instruction_input" style="display: none;">
                            <label for="instruction" class="col-sm-3 control-label">Instructions:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="instruction" placeholder="" rows="4" style="resize:none;" name="instruction" cols="50"></textarea> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_prescripton" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save Prescription&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade prescription" id="prescription-drug-modal" tabindex="-2" role="dialog" aria-labelledby="myPrescriptionDrugModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription-drug" accept-charset="UTF-8" role="form" id="prescription-drug-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myPrescriptionDrugModalLabel"><i class="fa fa-plus-circle"></i>&nbsp;Drug Description</h4>
            </div>
            <div class="modal-body">
                <div class="loader" style="display: none;">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
                        <br>
                        <span>Please Wait</span>
                    </div>
                </div>
                <div class="row form-content">
                  <div class="col-md-12">
                      <div class="form-group">
                         <label class="col-sm-3 control-label" for="generic_id"><i class="asterisk" style="color:red;">*</i> Generic Name :</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                                  <select class="form-control select2" id="generic_id" style="width:100%;" name="generic_id"></select>
                                  <div class="input-group-btn">
                                      <button class="btn btn-flat btn-primary" data-target="#drug-generic-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/settings/drug-generic"><i class="fa fa-plus"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="brand_id" class="col-sm-3 control-label">Brand Name:</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                                  <select class="form-control select2" id="brand_id" style="width:100%;" name="brand_id"></select>
                                  <div class="input-group-btn">
                                      <button class="btn btn-flat btn-primary brand-btn" data-generic-text="" data-generic-id="" data-target="#drug-brand-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/settings/drug-brand"><i class="fa fa-plus"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                         <label class="col-sm-3 control-label" for="dosage_id">
                            <!-- <i class="asterisk" style="color:red;">*</i> -->
                            Dosage Form:</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                                  <select class="form-control select2" id="dosage_id" style="width:100%;" name="dosage_id"></select>
                                  <div class="input-group-btn">
                                      <button class="btn btn-flat btn-primary" data-target="#drug-dosage-modal" data-toggle="modal" data-backdrop="static" data-method="POST" type="button" data-action="https://web.dentalclinicapp.com/clinic/settings/drug-dosage"><i class="fa fa-plus"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label" for="quantity">
                            <!-- <i class="asterisk" style="color:red;">*</i>  -->
                            Quantity:</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="quantity" placeholder="e.g. 30 pieces" autocomplete="off" name="quantity" type="text" value=""> 
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label" for="dosage">
                            <!-- <i class="asterisk" style="color:red;">*</i>  -->
                            Dosage &amp; Frequency:</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="dosage" placeholder="e.g. 1 cap. every 8 hours" autocomplete="off" name="dosage" type="text" value=""> 
                          </div>
                      </div>
<!--                       <div class="form-group">
                          <label class="col-sm-3 control-label" for="frequency"><i class="asterisk" style="color:red;">*</i> Frequency:</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="frequency" placeholder="e.g. Every 8 hours" autocomplete="off" name="frequency" type="text" value=""> 
                          </div>
                      </div> -->
                      <div class="form-group">
                          <label class="col-sm-3 control-label" for="duration"><i class="asterisk" style="color:red;">*</i> Duration (days):</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="duration" placeholder="e.g. 7 days" autocomplete="off" name="duration" type="text" value=""> 
                          </div>
                      </div>
                      <input class="form-control" id="prescription_id" autocomplete="off" name="prescription_id" type="hidden" value=""> 
                  </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_prescripton_drug" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save &nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="drug-generic-modal" tabindex="-1" role="dialog" aria-labelledby="myDrugGenericModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="drug-generic-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myDrugGenericModalLabel"> Add Generic</h4>
            </div>

            <div class="modal-body">
             
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Generic Name :</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="generic_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_drug-generic" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="drug-brand-modal" tabindex="-1" role="dialog" aria-labelledby="myDrugBrandModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="drug-brand-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myDrugBrandModalLabel"> Add Brand Name</h4>
            </div>

            <div class="modal-body">
             
                <div class="row">
                    
                    <div class="col-md-12">
                       <!--   <div class="form-group">
                              <label for="generic_id" class="col-sm-3 control-label">Generic Name:</label>
                              <div class="col-sm-9">
                                    <select class="form-control select2" id="generic_id" style="width:100%;" name="generic_id"></select>
                              </div> -->
                                                                                      <!-- </div> -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Brand Name :</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="brand_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_drug-brand" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="drug-dosage-modal" tabindex="-1" role="dialog" aria-labelledby="myDrugDosageModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="drug-dosage-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myDrugDosageModalLabel"> Add Dosage Name</h4>
            </div>

            <div class="modal-body">
             
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Dosage Name :</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="dosage_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_drug-dosage" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
</div>
<div class="modal fade" id="procedure-modal" tabindex="-1" role="dialog" aria-labelledby="procedureModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="procedure-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="procedureModalLabel"><i class="fa fa-plus-circle"></i> Add Procedure</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Procedure Name :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="procedure_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Amount :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="min_amount" placeholder="" min="0" autocomplete="off" name="min_amount" type="number" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade" id="insurance-modal" tabindex="-1" role="dialog" aria-labelledby="insuranceModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="insurance-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="insuranceModalLabel"><i class="fa fa-plus-circle"></i> Add Insurance</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Insurance Name :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="insurance_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="contact_number">Contact Number :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="contact_number" placeholder="" autocomplete="off" name="contact_number" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email">Email :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="email" placeholder="" autocomplete="off" name="email" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="address">Address :</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="address" placeholder="" autocomplete="off" name="address" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_insurance" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="download-pdf-modal" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file-pdf-o"></i> Export to PDF</h4>
            </div>
            <form method="POST" action="https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/generate-note-pdf" accept-charset="UTF-8" role="form" id="download-pdf-form" target="_blank"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
            <div class="modal-body">
                <div class="row clinic-text-gray">
                    <div class="col-md-12">
                        <h4><b>Data to export</b></h4>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="pdf_option checked" checked="checked" name="has_patient_information" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Patient Information
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="pdf_option checked" checked="checked" name="has_medical_history" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Medical History
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="pdf_option checked" checked="checked" name="has_dental_notes" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Dental Notes -
                                
                                <a href="#select-notes" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#select-notes-modal"><span id="selected_notes_pdf">All notes selected.</span></a>
                                <input type="hidden" name="selected_notes_id" id="selected_notes_id_value" value="all">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="pdf_option checked" checked="checked" name="has_payments" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Payments -
                                
                                <a href="#select-payments" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#select-payments-modal"><span id="selected_payments_pdf">All payments selected.</span></a>
                                <input type="hidden" name="selected_payments_id" id="selected_payments_id_value" value="all">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="download-pdf-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Exporting..."><i class="fa fa-download"></i> &nbsp;Export&nbsp;</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="select-notes-modal" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" style="width: 550px;">
        <div class="select_modal_dialog">
            <div class="modal-header clinic-modal-header clinic-text-gray" style="background-color: white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> Select Dental Notes</h4>
            </div>
            <div class="modal-content">
                <div class="modal-body">
                    <form id="select-notes-form">
                        <input type="hidden" name="notes_data_total" id="notes_data_total" value="0">
                        <div id="select-notes-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="select-notes-table" style="width: 100%" class="table table-striped table-hover dataTable no-footer" role="grid">
                             <thead>
                                 <tr role="row"><th class="text-right sorting_disabled td_note_checkbox" rowspan="1" colspan="1" style="width: 30px;"><div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input name="select_all" type="checkbox" id="select_all_notes" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></th><th class="sorting_disabled" rowspan="1" colspan="1">Dental Notes</th></tr>
                             </thead>
                        <tbody><tr class="odd"><td valign="top" colspan="2" class="dataTables_empty">No data available in table</td></tr></tbody></table><div id="select-notes-table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="background-color: white;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="select-notes-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Selecting..."><i class="fa fa-check"></i> &nbsp;Select&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="select-payments-modal" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" style="width: 550px;">
        <div class="select_modal_dialog">
            <div class="modal-header clinic-modal-header clinic-text-gray" style="background-color: white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> Select Payments</h4>
            </div>
            <div class="modal-content">
                <div class="modal-body">
                    <form id="select-payments-form">
                        <input type="hidden" name="payments_data_total" id="payments_data_total" value="0">
                        <div id="select-payments-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="select-payments-table" style="width: 100%" class="table table-striped table-hover dataTable no-footer" role="grid">
                             <thead>
                                 <tr role="row"><th class="text-right sorting_disabled td_payment_checkbox" rowspan="1" colspan="1" style="width: 30px;"><div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input name="select_all" type="checkbox" id="select_all_payments" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></th><th class="sorting_disabled" rowspan="1" colspan="1">Payments</th></tr>
                             </thead>
                        <tbody><tr class="odd"><td valign="top" colspan="2" class="dataTables_empty">No data available in table</td></tr></tbody></table><div id="select-payments-table_processing" class="dataTables_processing" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="background-color: white;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta" id="select-payments-btn" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Selecting..."><i class="fa fa-check"></i> &nbsp;Select&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-method-modal" tabindex="-1" role="dialog" aria-labelledby="paymentMethodModalLabel">
<form method="POST" action="https://web.dentalclinicapp.com" accept-charset="UTF-8" role="form" id="payment-method-modal-form" class="form-horizontal clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="paymentMethodModalLabel"><i class="fa fa-plus-circle"></i> Add Payment Method</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name"><i class="asterisk" style="color:red;">*</i> Method Name:</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="payment_method_name" placeholder="" autocomplete="off" name="name" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_payment_method" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Saving...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade" id="recall-date-modal" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
<form method="POST" action="https://web.dentalclinicapp.com/clinic/patients/BD4Padp3Jr/update-recall-date" accept-charset="UTF-8" role="form" id="recall-date-form" class="clinic-text-gray" novalidate="novalidate"><input name="_token" type="hidden" value="Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7">
    <input name="_method" type="hidden" value="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clinic-modal-header clinic-text-gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Enter recall date for this patient</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <sup class="fa fa-asterisk form-required"></sup>
                            <label for="recall_date">Recall Date:</label>
                            <input class="form-control input-datepicker hasDatepicker" id="recall_date" name="recall_date" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn clinic-btn-magenta btn-loading" id="btn_save_recall" data-loading-text="<i class='fa fa-refresh fa-spin'> </i> Sending...">&nbsp;&nbsp;<i class="fa fa-save"></i> &nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="pull-right hidden-xs">
                        <b>Version:</b> 
                    </div>
                    <strong>Copyright © 2022 <a href="http://www.quantumx.com">Quantum X, Inc</a>.</strong>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/dist/js/app.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/clinic/js/clinic.js"></script>
        <!-- <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/bootstrap-tour-0.12.0/build/js/bootstrap-tour.min.js"></script> -->
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/smartmenus-1.0.0/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/smartmenus-1.0.0/addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/datatables/extensions/Pagination/input_old.js"></script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/momentjs/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>
        <script type="text/javascript">
            $(function(){
                var firstDay = "0";
                $.datepicker.setDefaults({
                  firstDay: parseInt(firstDay)
                });
            })
        </script>

                        <script type="text/javascript">
            $(function () {
                $('body').on('hidden.bs.modal', function () {
                    if($('.modal.in').length > 0)
                    {
                        $('body').addClass('modal-open');
                    }
                });
                
                $.ajaxSetup({
                   headers: { 'X-CSRF-TOKEN': 'Xzx2QDS1aD7MrovQno0tHRezqBijvR5jGD6ra1x7' }
                });
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
                $.datepicker.setDefaults({
                    yearRange: "1970:+1"
                });
                $('.btn-loading').click(function(){
                    $(this).button('loading');
                });
                $.fn.dataTable.ext.errMode = 'none'; 
                $('table').on('error.dt', function(e, settings, techNote, message) {
                  console.log( 'An error occurred: ', message); 
                });

                $('a[href="#upgrade"]').click(function(){
                    UpgradeAlert();

                    var data_installment = $(this).data('installment');
                    if(data_installment == false){
                        setTimeout(function(){
                            $('#installment_tab').removeClass('active');
                            $('#full_payment_tab').addClass('active');
                        }, 10);
                    }

                    var data_add_installment = $(this).data('add_installment');
                    if(data_add_installment == false){
                        setTimeout(function(){
                            $('#li-cash').addClass('active');
                            $('#li-installment').removeClass('active');
                        }, 10);
                    }
                });
            });
            function UpgradeAlert(){
                swal({
                    title: 'Unlock Feature',
                    text: "This feature is not available for free users.",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#18a2eb',
                    cancelButtonColor: '#b566d3',
                    confirmButtonText: 'Upgrade',
                    showLoaderOnConfirm: true,
                    preConfirm : function(){
                        return new Promise(function(){
                            window.location = "https://web.dentalclinicapp.com/clinic/7xVFqiz2LqpgEPWSEvSIIejbfPRgVD70I1J6XkhtNgeI9MN7Zq9PItFJWOWA/subscription";
                        });
                    },
                    allowOutsideClick: false
                });
            }
        </script>
        <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/jquery.rwdImageMaps/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/jquery.maphilight/jquery.maphilight.js"></script>
<!-- <script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/momentjs/moment.js"></script> -->
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/viewerjs-master/dist/viewer.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/webcamjs-master/webcam.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/fileinput/fileinput.js"></script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#photo-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"caption":{"laravelValidation":[["Required",[],"The caption field is required.",true]]},"image":{"laravelValidation":[["Mimes",["jpeg","jpg","png","PNG "],"The image must be a file of type: jpeg, jpg, png, PNG .",false],["Max",["10000"],"The image may not be greater than 10MB.",false]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var photoTable = $('#photo-table').DataTable({
		processing: true,
	    serverSide: true,
	    "pageLength": 5,
	    "deferLoading":0,
	    // "pagingType": "input",
	    "dom": '<"top"f>rt<"bottom"p>',
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-photo-data',
	        method: 'POST'
	    },
	    columns: [
	        {data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{ data: 'patient_photo', name: 'patient_photo', orderable: false, searchable: false, width:'150px'},
	    	{ data: 'photo_created_date', name: 'created_at', orderable: true, searchable: false,width:'150px'},
	    	{ data: 'updated_date', name: 'updated_at', orderable: true, searchable: false,width:'150px'},
	    	{ data: 'caption', name: 'caption', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'80px', className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('a#btn-photo-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Photo!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm : function(){
				    	return new Promise(function(){
					        $.ajax({
					            type: "DELETE",
					            url: action,
					            dataType: 'json',
					            success: function(data) {
					                if(data.type == "success") {
					                    swal({
				                    		title: 	'Deleted!',
				                    	  	text: 	data.message,
				                    	 	type: 	'success'
					                    });
					                    photoTable.draw();
					                    $('.photo_count').html(data.count);
					               }else{
		           		                swal({
		       		                		title: 	'Error!',
		       		                	  	text: 	data.message,
		       		                	 	type: 	'error'
		           		                });
					               }
					            },
					            error :function( jqXhr ) {
					                swal(
				                      'Error!',
				                      'Something went wrong.',
				                      'error'
				                    );        
					            }
					        });
				    	});
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    initComplete: function(settings, json) {
	    	$(document).on('click', 'img.image', function(){
	    		var id = $(this).data('id');
	    		var image = document.getElementById(id);
	    		var options = {
	    			title: 0,
	    			toolbar: {
	    			    zoomIn: 1,
	    			    zoomOut: 1,
	    			    oneToOne: 0,
	    			    reset: 0,
	    			    prev: 0,
	    			    play: {
	    			      show: 0,
	    			    },
	    			    next: 0,
	    			    rotateLeft: 0,
	    			    rotateRight: 0,
	    			    flipHorizontal: 0,
	    			    flipVertical: 0,
	    			  },
	    		};
	    		var viewer = new Viewer(image, options);
	    	});
	    },
	    "order": [[3,'desc']],
	});

	$('#photo-form').submit(function(e){
		e.preventDefault();
		var action = $(this).attr('action');
		var method = $(this).attr('method');
		var form = $(this);
		if(form.valid()){
			$.ajax({
				type: 'POST',
				data:  new FormData(this),
			   	contentType: false,
			    cache: false,
			   	processData:false,
			   	url: action,
			   	success: function(data){
			   		if(data.type == 'success'){
	                    swal({
	                		title: 	'Success!',
	                	  	text: 	data.message,
	                	 	type: 	'success'
	                    });
	                    $('#photo-form')[0].reset();
	                    $('#photo-modal').modal('hide');
	                    photoTable.draw();
	                    $('.photo_count').html(data.count);
			   		}else if(data.type == 'error'){
			   			swal({
	                		title: 	'Oops!',
	                	  	text: 	data.message,
	                	 	type: 	'warning'
	                    });
			   		}else{
			   			$('#photo-form')[0].reset();
	                    $('#photo-modal').modal('hide');
	                    photoTable.draw();
	                    $('.photo_count').html(data.count);
			   		}
			   		$('.btn-loading').button('reset');
			   	},
				error :function( jqXhr ) {
				    swal(
				      'Error!',
				      'Something went wrong.',
				      'error'
				    );      
				    $('.btn-loading').button('reset');  
				}
			});
		}else{
			$('.btn-loading').button('reset');
		}
	});
})
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#appointment-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"patient_id":{"laravelValidation":[["Required",[],"The patient field is required",true]]},"appointment_date":{"laravelValidation":[["Required",[],"The appointment date is required.",true]]},"appointment_time":{"laravelValidation":[["Required",[],"The appointment start time is required",true]]},"appointment_time_to":{"laravelValidation":[["Required",[],"The appointment end time is required",true]]},"clinic_user_id":{"laravelValidation":[["RequiredUnless",["role_type","3"],"The dentist field is required.",true]]},"notes":{"laravelValidation":[["Required",[],"The notes field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var appointmentTable = $('#appointment-table').DataTable({
		processing: true,
	    serverSide: true,
	    "deferLoading":0,
	    // "pagingType": "input",
	    "dom": '<"top">rt<"bottom"p>',
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/appointment-data',
	        method: 'POST',
	        data: function(d){
	        	d.sort_by = $('#appointment_sort').val();
	        	d.clinic_user_id = $('#clinic_user_id_option').val();
	        }
	    },
	    columns: [
	        {data: 'DT_Row_Index', orderable: false, searchable: false,width:'10px', className : 'text-center'},
	    	{ data: 'schedule_date', name: 'schedule', orderable: true, searchable: false,width:'90px'},
	    	{ data: 'appointment_time', name: 'appointment_time', orderable: false, searchable: false,width:'120px'},
	    	{ data: 'appointment_status', name: 'status', orderable: true, searchable: false,width:'100px'},
	    	{ data: 'updated_date', name: 'updated_at', orderable: true, searchable: false,width:'170px'},
	    	{ data: 'notes', name: 'notes', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'60px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('a#btn-appointment-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Appointment!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm : function(){
				    	return new Promise(function(){
					        $.ajax({
					            type: "DELETE",
					            url: action,
					            dataType: 'json',
					            success: function(data) {
					                if(data.type == "success") {
					                    swal({
				                    		title: 	'Deleted!',
				                    	  	text: 	data.message,
				                    	 	type: 	'success'
					                    });
					                    appointmentTable.draw();
					                    $('.appointment-count').html(data.count);
					               }else{
	               		                swal({
		       		                		title: 	'Error!',
		       		                	  	text: 	data.message,
		       		                	 	type: 	'error'
	               		                });
					               }
					            },
					            error :function( jqXhr ) {
					                swal(
				                      'Error!',
				                      'Something went wrong.',
				                      'error'
				                    );        
					            }
					        });
				    	});
				    },
				    allowOutsideClick: false
				});
			});

			$('.appointment_status_select').on('change',function(){
				var action = $(this).data('action');
				var value = $(this).find(':selected').val();
				var status = $(this).data('status');
				var hashid = $(this).data('hashid');

				if(value != 'pending'){
					swal({
			            title: 'Are you sure you want to change appointment status?',
			            text: "",
			            type: 'warning',
			            showCancelButton: true,
			            confirmButtonColor: '#3085d6',
			            cancelButtonColor: '#d33',
			            confirmButtonText: 'Yes, change it!',
			            showLoaderOnConfirm: true,
			            preConfirm : function(){
			                return new Promise(function(){
			                    $.ajax({
			                        type: "POST",
			                        dataType: 'json',
			                        data: {status:value},
			                        url: action,
			                        success: function(data) {
			                            if(data.type == "success") {
			                                swal({
		    		                            title:  'Updated!',
		    		                            text:   data.message,
		    		                            type:   'success'
		    		                        });
		    		                        appointmentTable.draw();
			                           }else{
			                           		swal.close();
			                                appointmentTable.draw();
			                           }
			                        },
			                        error :function( jqXhr ) {
			                            swal(
			                              'Oops!',
			                              'Something went wrong.',
			                              'error'
			                            );        
			                        }
			                    });
			                });
			            },
			            allowOutsideClick: false
			        }).then(function (result) {
	                    if(result.dismiss == 'cancel'){
	                        $('#status-'+hashid).val(status);
	                    }
	                });
				}else{
					swal(
                      'Oops!',
                      'You need to select a status.',
                      'warning'
                    );
                    $('#status-'+hashid).val(status);
				}
			});
    	},
    	"order": [[1,'asc']],
	});

	$('#appointment-form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = form.attr('action');
		if(form.valid()){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: form.serialize(),
				url: action,
				success: function(data){
					if(data.type == 'success'){
					    swal({
							title: 	'Success!',
						  	text: 	data.message,
						 	type: 	'success'
					    });
					    $('#appointment-modal').modal('hide');
					    $('.appointment-count').html(data.count);
					    appointmentTable.draw();
					}
					if(data.type == 'error'){
						swal({
							title: 	'Error!',
						  	text: 	data.message,
						 	type: 	'error'
					    });
					}
					if(data.type == undefined){
						$('#appointment-modal').modal('hide');
					}
					$('.btn-loading').button('reset');
				},
				error :function( jqXhr ) {
				    swal(
				      'Error!',
				      'Something went wrong.',
				      'error'
				    );      
				    $('.btn-loading').button('reset');  
				}
			});
		}else{
			$('.btn-loading').button('reset');
		}
	});

	$('#appointment_sort').on('change',function(){
		appointmentTable.draw();
	});

	$('#clinic_user_id_option').on('change',function(){
		appointmentTable.draw();
	});
});
</script><script type="text/javascript">
$(function(){
	var dentalChartTable = $('#dental-chart-table').DataTable({
		processing: true,
	    serverSide: true,
        "dom": '<"top"f>rt<"bottom"p>',
        "deferLoading":0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-dental-chart-datatable',
	        method: 'POST'
	    },
	    columns: [
	        {data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
            {data: 'note_color', name: 'note_color', orderable: false, searchable: false,width:'90px'},
            {data: 'note_name', name: 'note_name', orderable: false, searchable: false,width:'90px'},
            {data: 'note_date', name: 'note_date', orderable: true, searchable: false,width:'90px'},
            {data: 'procedures', name: 'procedures', orderable: false, searchable: false,},
            {data: 'updated_date', name: 'updated_at', orderable: true, searchable: false,width:'150px'},
	    	{data: 'notes', name: 'notes', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'90px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('a#btn-chart-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Note!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
                    showLoaderOnConfirm: true,
                    preConfirm: function(){
                        return new Promise(function(){
                                $.ajax({
                                    type: "DELETE",
                                    url: action,
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.type == "success") {
                                            swal({
                                                title:  'Deleted!',
                                                text:   data.message,
                                                type:   'success'
                                            });
                                            $('#dental-notes-table').DataTable().draw();
                                            dentalChartTable.draw();
                                            $('.dental-notes-count').html(data.count);
                                            $('.dental-chart-count').html(data.count_chart);
                                       }else{
                                            swal({
                                                title:  'Error!',
                                                text:   data.message,
                                                type:   'error'
                                            });
                                       }
                                    },
                                    error :function( jqXhr ) {
                                        swal(
                                          'Error!',
                                          'Something went wrong.',
                                          'error'
                                        );        
                                    }
                                });
                        });
                    },
                    allowOutsideClick: false
				});
	    	});
	    },
	    "order": [[5,'desc']],
	});

    $(document).on('click', '#update_chart_type', function(){
        var action = $(this).data('action');
        var options = {1 : 'FDI', 2: 'Universal'};

        swal({
            title: 'Select Dental Numbering Type',
            input: 'select',
            inputOptions: options,
            inputValue: "2",
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Save',
            showLoaderOnConfirm: true,
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    resolve();
                })
            },
            preConfirm: (value) => {
                return new Promise(function(){
                $.ajax({
                    type: 'PUT',
                    dataType: 'json',
                    data: {dental_chart_type: value},
                    url: action,
                    success: function(data) {
                        if(data.type == "success") {
                            swal({
                                title:  'Updated!',
                                text:   data.message,
                                type:   'success'
                            });
                        }
                        location.reload();
                     },
                        error :function( jqXhr ) {
                            swal(
                            'Oops!',
                            'Something went wrong.',
                            'error'
                            );        
                        }
                    });
                });
            },
            allowOutsideClick: false
        });
    });
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#dental-notes-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"note_date":{"laravelValidation":[["Required",[],"Date field is required.",true]]},"procedure_ids":{"laravelValidation":[["Required",[],"Procedure field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var dentalNoteTable = $('#dental-notes-table').DataTable({
		processing: true,
	    serverSide: true,
	    "dom": '<"top"f>rt<"bottom"p>',
	    "deferLoading":0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes-data',
	        method: 'POST'
	    },
	    columns: [
	    	{data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{data: 'note_color', name: 'note_color', orderable: false, searchable: false,width:'90px'},
	    	{data: 'note_name', name: 'note_name', orderable: false, searchable: false,width:'90px'},
	    	{data: 'note_date', name: 'note_date', orderable: true, searchable: false,width:'90px'},
	    	{data: 'procedure_price', name: 'procedure_price', orderable: false, searchable: false},
	    	{data: 'updated_date', name: 'updated_at', orderable: true, searchable: false,width:'150px'},
	    	{data: 'notes', name: 'notes', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'100px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$(document).find('a#btn-note-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Note!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm: function(){
				    	 return new Promise(function(){
	 					        $.ajax({
	 					            type: "DELETE",
	 					            url: action,
	 					            dataType: 'json',
	 					            success: function(data) {
	 					                if(data.type == "success") {
	 					                    swal({
	 				                    		title: 	'Deleted!',
	 				                    	  	text: 	data.message,
	 				                    	 	type: 	'success'
	 					                    });
	 					                    dentalNoteTable.draw();
	 					                    $('#dental-chart-table').DataTable().draw();
	 					                    $('.dental-notes-count').html(data.count);
	 					                    $('.dental-chart-count').html(data.count_chart);
	 					               }else{
	 	               		                swal({
	 		       		                		title: 	'Error!',
	 		       		                	  	text: 	data.message,
	 		       		                	 	type: 	'error'
	 	               		                });
	 					               }
	 					            },
	 					            error :function( jqXhr ) {
	 					                swal(
	 				                      'Error!',
	 				                      'Something went wrong.',
	 				                      'error'
	 				                    );        
	 					            }
	 					        });
				    	 });
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    "order": [[5,'desc']],
	});

	$('#dental-notes-form').submit(function(e){
		//e.preventDefault();
		var form = $(this);
		var chart_name = $('input[id="chart_name"]').val();
		var action = form.attr('action');
		form.find('#btn_save_notes').button('loading');
		if(form.valid()){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: form.serialize(),
				url: action,
				success: function(data){
					if(data.type == 'success'){
					    swal({
							title: 	'Success!',
						  	text: 	data.message,
						 	type: 	'success'
					    });
					 //    $('#spin-loading-adult').removeClass('hide');
						// $('#spin-loading-pediatric').removeClass('hide');
						emptySelectedNotes(chart_name);
					    $('#dental-notes-form')[0].reset();
					    $('#dental-notes-modal').modal('hide');
					    dentalNoteTable.draw();
					    $('#dental-chart-table').DataTable().draw();
					    $('#dental-chart-notes-table').DataTable().draw();
					    $('.dental-notes-count').html(data.count);
					    $('.dental-chart-count').html(data.count_chart);
					    $('#dental-notes-form').find('#note_date').val(moment().format('MM/DD/YYYY'));
					}else{
						$('#dental-notes-form')[0].reset();
						$('#dental-notes-modal').modal('hide');
						dentalNoteTable.draw();
						$('#dental-chart-table').DataTable();
						$('#dental-notes-form').find('#note_date').val(moment().format('MM/DD/YYYY'));
					}
					$('#btn_save_notes').button('reset');
				},
                error :function( jqXhr ) {
                    swal(
                      'Error!',
                      'Something went wrong.',
                      'error'
                    );      
                    $('.btn-loading').button('reset');  
                }
			});
			//$('#btn_save_notes').button('reset');
			return false;
		}else{
			$('#btn_save_notes').button('reset');
		}
	});

	// $("#dental-notes-modal").on('hidden.bs.modal', function (e) {
	// 	var chart = $('#dental-chart-modal').is(':visible');
	// 	if(chart == true){
	// 		$("body").addClass("modal-open");
	// 	}
	// });

	$("#procedure-modal").on('hidden.bs.modal', function (e) {
		var notes = $('#dental-notes-modal').is(':visible');
		if(notes == true){
			$("body").addClass("modal-open");
		}
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#request-forms-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"request_date":{"laravelValidation":[["Required",[],"The request date field is required.",true]]},"requests":{"laravelValidation":[["Required",[],"The requests field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var requestFormTable = $('#request-forms-table').DataTable({
		processing: true,
	    serverSide: true,
	    "dom": '<"top"f>rt<"bottom"p>',
	    "deferLoading":0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/request-forms-data',
	        method: 'POST'
	    },
	    columns: [
	    	{data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{data: 'request_date', name: 'request_date', orderable: true, searchable: false,width:'90px'},
	    	{data: 'requests', name: 'requests', orderable: false, searchable: false},
	    	{data: 'remarks', name: 'remarks', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'100px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$(document).find('a#btn-request-forms-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Note!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm: function(){
				    	 return new Promise(function(){
	 					        $.ajax({
	 					            type: "DELETE",
	 					            url: action,
	 					            dataType: 'json',
	 					            success: function(data) {
	 					                if(data.type == "success") {
	 					                    swal({
	 				                    		title: 	'Deleted!',
	 				                    	  	text: 	data.message,
	 				                    	 	type: 	'success'
	 					                    });
	 					                    requestFormTable.draw();
	 					                    $('#request-forms-table').DataTable().draw();
	 					                    $('.request-forms-count').html(data.count);
	 					               }else{
	 	               		                swal({
	 		       		                		title: 	'Error!',
	 		       		                	  	text: 	data.message,
	 		       		                	 	type: 	'error'
	 	               		                });
	 					               }
	 					            },
	 					            error :function( jqXhr ) {
	 					                swal(
	 				                      'Error!',
	 				                      'Something went wrong.',
	 				                      'error'
	 				                    );        
	 					            }
	 					        });
				    	 });
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    "order": [[1,'desc']],
	});

	$('#request-forms-form').submit(function(e){
		//e.preventDefault();
		var form = $(this);
		var action = form.attr('action');
		form.find('#btn_save_request_forms').button('loading');
		if(form.valid()){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: form.serialize(),
				url: action,
				success: function(data){
					if(data.type == 'success'){
					    swal({ 
							title: data.message,
				            text: "Do you want to print this request?",
				            type: "success",
				            showCancelButton: true,
					        confirmButtonColor: '#3085d6',
					        cancelButtonColor: '#d33',
					        confirmButtonText: 'Yes',
					        cancelButtonText: 'No',
				            allowOutsideClick: false
						}).then(okay => {
							if(okay.value){
								var print_url = data.print_url;
								if(print_url){
									window.open(print_url, '_blank');
								}
							}
						});
					 //    $('#spin-loading-adult').removeClass('hide');
						// $('#spin-loading-pediatric').removeClass('hide');
						
					    $('#request-forms-form')[0].reset();
					    $('#request-forms-modal').modal('hide');
					    requestFormTable.draw();
					    $('#request-forms-table').DataTable().draw();
					    $('.request-forms-count').html(data.count);
					    $('#request-forms-form').find('#request_date').val(moment().format('MM/DD/YYYY'));
					}else{
						$('#request-forms-form')[0].reset();
					    $('#request-forms-modal').modal('hide');
					    requestFormTable.draw();
					    $('#request-forms-table').DataTable().draw();
					    $('#request-forms-form').find('#request_date').val(moment().format('MM/DD/YYYY'));
					}
					$('#btn_save_request_forms').button('reset');
				},
                error :function( jqXhr ) {
                    swal(
                      'Error!',
                      'Something went wrong.',
                      'error'
                    );      
                    $('.btn-loading').button('reset');  
                }
			});
			//$('#btn_save_notes').button('reset');
			return false;
		}else{
			$('#btn_save_request_forms').button('reset');
		}
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#dental-certificates-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"certificate_date":{"laravelValidation":[["Required",[],"The signed date is required field",true]]},"procedure_ids":{"laravelValidation":[["Required",[],"The procedure is required field",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var dentalCertificateTable = $('#dental-certificates-table').DataTable({
		processing: true,
	    serverSide: true,
	    "dom": '<"top"f>rt<"bottom"p>',
	    "deferLoading":0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-certificates-data',
	        method: 'POST'
	    },
	    columns: [
	    	{data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{data: 'certificate_date', name: 'certificate_date', orderable: true, searchable: false,width:'90px'},
	    	{data: 'procedures', name: 'procedures', orderable: false, searchable: false},
	    	{data: 'remarks', name: 'remarks', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'100px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$(document).find('a#btn-dental-certificate-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Note!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm: function(){
				    	 return new Promise(function(){
	 					        $.ajax({
	 					            type: "DELETE",
	 					            url: action,
	 					            dataType: 'json',
	 					            success: function(data) {
	 					                if(data.type == "success") {
	 					                    swal({
	 				                    		title: 	'Deleted!',
	 				                    	  	text: 	data.message,
	 				                    	 	type: 	'success'
	 					                    });
	 					                    dentalCertificateTable.draw();
	 					                    $('#dental-certificates-table').DataTable().draw();
	 					                    $('.dental-certificates-count').html(data.count);
	 					               }else{
	 	               		                swal({
	 		       		                		title: 	'Error!',
	 		       		                	  	text: 	data.message,
	 		       		                	 	type: 	'error'
	 	               		                });
	 					               }
	 					            },
	 					            error :function( jqXhr ) {
	 					                swal(
	 				                      'Error!',
	 				                      'Something went wrong.',
	 				                      'error'
	 				                    );        
	 					            }
	 					        });
				    	 });
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    "order": [[1,'desc']],
	});

	$('#dental-certificates-form').submit(function(e){
		//e.preventDefault();
		var form = $(this);
		var action = form.attr('action');
		form.find('#btn_save_dental_certificates').button('loading');
		if(form.valid()){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: form.serialize(),
				url: action,
				success: function(data){
					if(data.type == 'success'){
					    swal({ 
							title: data.message,
				            text: "Do you want to print this request?",
				            type: "success",
				            showCancelButton: true,
					        confirmButtonColor: '#3085d6',
					        cancelButtonColor: '#d33',
					        confirmButtonText: 'Yes',
					        cancelButtonText: 'No',
				            allowOutsideClick: false
						}).then(okay => {
							if(okay.value){
								var print_url = data.print_url;
								if(print_url){
									window.open(print_url, '_blank');
								}
							}
						});
					 //    $('#spin-loading-adult').removeClass('hide');
						// $('#spin-loading-pediatric').removeClass('hide');
						
					    $('#dental-certificates-form')[0].reset();
					    $('#dental-certificates-modal').modal('hide');
					    dentalCertificateTable.draw();
					    $('#dental-certificates-table').DataTable().draw();
					    $('.dental-certificates-count').html(data.count);
					    $('#dental-certificates-form').find('#date').val(moment().format('MM/DD/YYYY'));
					}else{
						$('#dental-certificates-form')[0].reset();
					    $('#dental-certificates-modal').modal('hide');
					    dentalCertificateTable.draw();
					    $('#dental-certificates-table').DataTable().draw();
					    $('#dental-certificates-form').find('#date').val(moment().format('MM/DD/YYYY'));
					}
					$('#btn_save_dental_certificates').button('reset');
				},
                error :function( jqXhr ) {
                    swal(
                      'Error!',
                      'Something went wrong.',
                      'error'
                    );      
                    $('.btn-loading').button('reset');  
                }
			});
			//$('#btn_save_notes').button('reset');
			return false;
		}else{
			$('#btn_save_dental_certificates').button('reset');
		}
	});

	$("#procedure-modal").on('hidden.bs.modal', function (e) {
		var dentalCertificate = $('#dental-certificates-modal').is(':visible');
		if(dentalCertificate == true){
			$("body").addClass("modal-open");
		}
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/template/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#medical_history').wysihtml5({
		toolbar: {
			"fa": true,
			"font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
			"emphasis": true, //Italics, bold, etc. Default true
			"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
			"html": false, //Button which allows you to edit the generated HTML. Default false
			"link": false, //Button to insert a link. Default true
			"image": false, //Button to insert an image. Default true,
			"color": false, //Button to change color of font  
			"blockquote": false, //Blockquote  
			"size": 'sm' //default: none, other options are xs, sm, lg
		}
	});

	$('#medical-history-form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = form.attr('action');
		var method = form.attr('method');
		if(action != ''){
			$.ajax({
				type: 'PUT',
				dataType: 'json',
				data: form.serialize(),
				url: action,
				success: function(data){
					if(data.type == 'success'){
		                swal({
	                    	title: 'Success!',
	                    	text: data.message,
	                    	type: 'success'
	                    });
	                    medicalView(data.patient_history);
	                    $('#medical-history-modal').modal('hide');
					}else{
		                errorMessage();
					}
					$('.btn-loading').button('reset');
				},
	            error :function( jqXhr ) {
	                errorMessage();
	                $('.btn-loading').button('reset');
	            }
			})
		}else{
            errorMessage();
            $('.btn-loading').button('reset');
		}
	});
});

function errorMessage()
{
	swal(
	  'Error!',
	  'Something went wrong.',
	  'error'
	);
}

function medicalView(medical_data)
{
	var add_button = '<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#medical-history-modal"><i class="fa fa-plus"></i> &nbsp; Add Medical History</button>';
	var edit_button = '<button class="btn clinic-btn-magenta btn-sm" data-toggle="modal" data-target="#medical-history-modal"><i class="fa fa-pencil"></i> &nbsp; Edit Medical History</button>';
	if(medical_data != ''){
		$('#medical-action').html(edit_button);
		$('#medical_history_text').find('#medical_text').html(medical_data);
	}else{
		$('#medical-action').html(add_button);
		$('#medical_history_text').find('#medical_text').html('No Medical History');
	}
}
</script><script type="text/javascript">
$(function(){
	medicalFileTable = $('#medical-files-table').DataTable({
		processing: true,
	    serverSide: true,
	    "pageLength": 5,
	    "deferLoading":0,
	    "pagingType": "input",
	    "dom": '<"top"f>rt<"bottom"p>',
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-medical-files',
	        method: 'POST'
	    },
	    columns: [
	        {data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{ data: 'medical_file', name: 'medical_file', orderable: false, searchable: false, width:'150px'},
	    	{ data: 'updated_date', name: 'updated_at', orderable: true, searchable: false,width:'150px'},
	    	{ data: 'remarks', name: 'remarks', orderable: false, searchable: false},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'80px', className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('a#btn-medical-file-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this File!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm : function(){
				    	return new Promise(function(){
					        $.ajax({
					            type: "DELETE",
					            url: action,
					            dataType: 'json',
					            success: function(data) {
					                if(data.type == "success") {
					                    swal({
				                    		title: 	'Deleted!',
				                    	  	text: 	data.message,
				                    	 	type: 	'success'
					                    });
					                    medicalFileTable.draw();
					                    $('#medical_files_count').html(data.count);
					               }else{
		           		                swal({
		       		                		title: 	'Error!',
		       		                	  	text: 	data.message,
		       		                	 	type: 	'error'
		           		                });
					               }
					            },
					            error :function( jqXhr ) {
					                swal(
				                      'Error!',
				                      'Something went wrong.',
				                      'error'
				                    );        
					            }
					        });
				    	});
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    initComplete: function(settings, json) {
	    	$(document).on('click', 'img.image', function(){
	    		var id = $(this).data('id');
	    		var image = document.getElementById(id);
	    		var options = {
	    			title: 0,
	    			toolbar: {
	    			    zoomIn: 1,
	    			    zoomOut: 1,
	    			    oneToOne: 0,
	    			    reset: 0,
	    			    prev: 0,
	    			    play: {
	    			      show: 0,
	    			    },
	    			    next: 0,
	    			    rotateLeft: 0,
	    			    rotateRight: 0,
	    			    flipHorizontal: 0,
	    			    flipVertical: 0,
	    			  },
	    		};
	    		var viewer = new Viewer(image, options);
	    	});
	    },
	    "order": [[2,'desc']],
	});

	$('#medical-history-file-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#medical-history-file-form');

		var modal = $(this);
		var filename = button.data('filename');
		var file = button.data('file');
		form.attr('action', action);
		form.attr('method', method);
		form.find('[name="_method"]').val(method);

		if(method == 'PUT'){
			var history_remarks = button.data('remarks');

			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Medical History Document');
			modal.find('#history_remarks').val(history_remarks);
			modal.find('#_file_name').val(file);
		}
		if(method == 'POST'){
			modal.find('#_file_name').val('');
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Medical History Document');
		}
		historyPhotoFileinput(filename);
	});

	$('#medical-history-file-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);
		var form = $('#medical-history-file-form');

        form.attr('action', '');
        form.attr('method', '');
        form.find('[name="_method"]').val('');

        modal.find('#medical-history-file-form')[0].reset();

		modal.find("#history_photo").fileinput('clear');
	});

	$('#history_photo').on('change', function(){
	    $('#history_snapshot').val('');
	});

	$('#medical-history-file-form').submit(function(e){
		e.preventDefault();
		var action = $(this).attr('action');
		var method = $(this).attr('method');
		var form = $(this);

		if(form.valid()){
			$.ajax({
				type: 'POST',
				data:  new FormData(this),
			   	contentType: false,
			    cache: false,
			   	processData:false,
			   	url: action,
			   	success: function(data){
			   		if(data.type == 'success'){
	                    swal({
	                		title: 	'Success!',
	                	  	text: 	data.message,
	                	 	type: 	'success'
	                    });
	                    $('#medical-history-file-form')[0].reset();
	                    $('#medical-history-file-modal').modal('hide');
	                    $('#medical_files_count').html(data.count);
	                    medicalFileTable.draw();
			   		}else if(data.type == 'error'){
			   			swal({
	                		title: 	'Oops!',
	                	  	text: 	data.message,
	                	 	type: 	'warning'
	                    });
			   		}else{
			   			$('#medical-history-file-form')[0].reset();
	                    $('#medical-history-file-modal').modal('hide');
	                    $('#medical_files_count').html(data.count);
	                    medicalFileTable.draw();
			   		}
			   		$('.btn-loading').button('reset');
			   	},
				error :function( jqXhr ) {
				    swal(
				      'Error!',
				      'Something went wrong.',
				      'error'
				    );      
				    $('.btn-loading').button('reset');  
				}
			});
		}else{
			setTimeout(function(){
                $('.btn-loading').button('reset');
            }, 500);
		}
	});
});

function historyPhotoFileinput(photo_url)

{
	if(navigator.userAgent.toLowerCase().indexOf("android") > -1 || navigator.userAgent.toLowerCase().indexOf("iphone") > -1){
		var browse_icon = '<i class="glyphicon glyphicon-camera"></i> &nbsp;&nbsp;Capture';
	}else{
		var browse_icon = '<i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp;Browse Document';
	}

	var file = $('#_file_name').val();
	var defaultPreviewContent = '';
	if(file != '') {
		var ext = file.slice((file.lastIndexOf(".") - 1 >>> 0) + 2);

		var extentions = {
			'doc': '<i class="fa fa-file-word-o text-primary"></i>' ,
			'docx':'<i class="fa fa-file-word-o text-primary"></i>',
			'pdf':'<i class="fa fa-file-pdf-o text-danger"></i>'
		};
		
		if(extentions[ext] !== undefined) {
			var defaultPreviewContent = `<a href="${photo_url}" alt="Your document" target="_blank"><div class="file-preview-frame" id="preview-default-1" data-fileindex="0" title="${file}" style="width:160px;height:160px;">
   <div class="file-preview-other-frame">
   <div class="file-preview-other">`;
			defaultPreviewContent += '<span class="file-icon-4x">'+extentions[ext]+'</span>';
			defaultPreviewContent += '</div></a>';
		} else {
			defaultPreviewContent = '<img src="'+photo_url+'" alt="Your Avatar" >';
		}
	}

	$("#history_photo").fileinput('refresh',{
	    overwriteInitial: true,
	    maxFileSize: 10240,
	    showClose: false,
	    showCaption: false,
	    browseLabel: '',
	    removeLabel: '',
	    browseIcon: browse_icon,   
	    removeIcon: '<i class="glyphicon glyphicon-remove clinic-text-gray"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: defaultPreviewContent,
	    allowedPreviewTypes: ['image', 'text'],
	    layoutTemplates: {
	        main2: '{preview} {remove} {browse}',
	    },
	    previewFileIconSettings: {
	        'doc': '<i class="fa fa-file-word-o text-primary"></i>',
	        'docx': '<i class="fa fa-file-word-o text-primary"></i>',
	        'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>'
	    }
	    // previewFileType: ["jpg", "png", "gif"]
	});
}
</script><script type="text/javascript">
$(function(){
	$('.adult-tab').on('shown.bs.tab', function (e) {
		emptySelectedNotes();
		$('#spin-loading-adult').removeClass('hide');
		$('#spin-loading-pediatric').removeClass('hide');
		setTimeout(function() {
			var pediatric = JSON.parse(getCookie('pediatric_chart'));
			if (pediatric != null || pediatric != undefined) {
		      var i = pediatric.indexOf('403814');
		      if (i != -1) {
		        pediatric.splice(i, 1);
		        setCookie(['pediatric_chart', JSON.stringify(pediatric)]);
		      }
		    }
		  	initChart('adult');
		}, 300);
	})
	$('.pediatric-tab').on('shown.bs.tab', function (e) {
		emptySelectedNotes();
		$('#spin-loading-adult').removeClass('hide');
		$('#spin-loading-pediatric').removeClass('hide');
		setTimeout(function() {
			var pediatric = JSON.parse(getCookie('pediatric_chart'));
			if (pediatric == null || pediatric == undefined) {
		 		pediatric = ['403814'];
		 		setCookie(['pediatric_chart', JSON.stringify(pediatric)]);
		 	}
		 	else {
	 		 	var i = pediatric.indexOf('403814');
	 		 	if (i == -1) {
			 		pediatric.push('403814');
			 		setCookie(['pediatric_chart', JSON.stringify(pediatric)]);
		 		}
		 	}
		  	initChart('pediatric');
		}, 300);
	});

	$('#dental-chart-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var from = button.data('from');
		var notes = $('#dental-notes-modal').is(':visible');
		$('.close_multiple').show();
		if(notes == true){
			$('#dental-notes-modal').modal('hide');
		}
		if(from == 'treatment-plan') {
			$('.add_btn_chart').attr('data-from', from);
			$('.close_multiple').hide();
		}
		

		$('#spin-loading-adult').removeClass('hide');
		$('#spin-loading-pediatric').removeClass('hide');
      	$('.adult-tab').tab('show');
      	setTimeout(function() {
      		initChart('adult');
		}, 300);
	});

	noOfSelected = 0;
	selectedTeeth = [];
	isSelectionActive = false;

	$('.close_multiple').click(function(){
		var chart_name = selectedTeeth[0].name;
		emptySelectedNotes(chart_name);
	});

	$('.dental_chart > area').click(function(){
		var tooth = $(this);
		var chart_id = tooth.attr('id');
		var highlight = tooth.attr('data-highlight');
		var chart_name = tooth.data('chart-name');

		if(chart_id && chart_name){
		/*	$.ajax({
				type: 'POST',
				dataType: 'json',
				data: {chart_id:chart_id,chart_name:chart_name},
				url: "https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-dental-chart-notes-data",
				success:function(res){*/
					var treatmentPlan = $('#treatment-plan-modal').is(':visible');
					if(highlight && isSelectionActive == false){
						if(treatmentPlan == true){
							$('#treatment-plan-modal').find('#treatment_plan_chart_id').val(chart_id);
							$('#treatment-plan-modal').find('#treatment_plan_chart_name').val(chart_name);
							if($.isNumeric(chart_name)){
								$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name);
							}else{
								$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name);
							}
						} else {
							$('#dental-notes-modal').find('#chart_id').val(chart_id);
							$('#dental-notes-modal').find('#chart_name').val(chart_name);
							$('#chart-note-modal').find('#chart_id_val').val(chart_id);
							$('#chart-note-modal').find('#chart_name_val').val(chart_name);
							if($.isNumeric(chart_name)){
								$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name);
							}else{
								$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name);
							}

							if($.isNumeric(chart_name)){
								$('#chart-note-modal').find('#dental_tooth_name').html("Tooth Number: "+chart_name);
							}else{
								$('#chart-note-modal').find('#dental_tooth_name').html("Tooth Letter: "+chart_name);
							}
							$('#chart-note-modal').modal('show');
						}
					}else{
						isSelectionActive = true;
						var data = $('#'+chart_id).mouseout().data('maphilight') || {};
    					var isActive = !data.alwaysOn;
    					if(isActive == true) {
							noOfSelected += 1;
	        				if(noOfSelected == 1) {
									var i = 1;
									while (i <= 52) {
										$('#'+i).data('maphilight', { alwaysOn: false }).trigger('alwaysOn.maphilight');
										i++;
									}
		        				}
							let chart = { 'id': chart_id, 'name': chart_name };
							selectedTeeth.push(chart);

							$('.view_chart_header').hide();
							$('.add_chart_header').show();
	        			} else {
							noOfSelected -= 1;
							var myArr = selectedTeeth.filter(obj => obj.id !== chart_id); 
							selectedTeeth = myArr;
							if(noOfSelected == 0) {
								if(treatmentPlan == true) {
									$('#treatment-plan-modal').find('#treatment_plan_chart_id').val("");
									$('#treatment-plan-modal').find('#treatment_plan_chart_name').val("");
								}
								emptySelectedNotes(chart_name);
							}
	        			}
	        			var chart_id_arr = [];
	        			var chart_name_arr = [];


						if(treatmentPlan == true) {
	        				var chart_name_arr_label = [];
		        			selectedTeeth.forEach(function(chart) {
		        				chart_id_arr.push(chart.id)
		        				chart_name_arr.push(chart.name)
		        				chart_name_arr_label.push('<span class="badge">'+chart.name+'</span>')
							});
							$('#treatment-plan-modal').find('#treatment_plan_chart_id').val(chart_id_arr);
							$('#treatment-plan-modal').find('#treatment_plan_chart_name').val(chart_name_arr);
							$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html("");
							if(chart_id_arr != "") {
								if($.isNumeric(chart_name)){
									$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name_arr_label.join(" ")+'&nbsp;&nbsp;<a href="#" id="treatment_plan_clear_tooth" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-times"></i> Clear</a><br />');
								}else{
									$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name_arr_label.join(" ")+'&nbsp;&nbsp;<a href="#" id="treatment_plan_clear_tooth" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-times"></i> Clear</a><br />');
								}
							}
						} else {
							selectedTeeth.forEach(function(chart) {
		        				chart_id_arr.push(chart.id)
		        				chart_name_arr.push(chart.name)
							});
							$('#dental-notes-modal').find('#chart_id').val(chart_id_arr);
							$('#dental-notes-modal').find('#chart_name').val(chart_name_arr);
							if($.isNumeric(chart_name)){
								$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name_arr);
							}else{
								$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name_arr);
							}
						}

	        			$('.number_selected').html(noOfSelected+' selected')
	        			$('#'+chart_id).data('maphilight', { alwaysOn: isActive }).trigger('alwaysOn.maphilight');
					}
			/*	}
			});*/
		}
	});
});

$('.add_btn_chart').click(function(){
	var from = $(this).attr('data-from');
	if(from == 'treatment-plan') {
		isSelectionActive = false;
		$('.close_multiple').show();
		$('#dental-chart-modal').modal('hide');
	} else {
		showDentalNotesModal();
	}
});

function showDentalNotesModal()
{
	var notes_model = $('#dental-notes-modal');
	notes_model.modal('show');
	hideLoader();
	action = "https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/dental-notes";
	method = "POST";
	notes_model.find('#notes').val('');
	$('input[name="color_code"][value="7F8C8D"]').prop('checked', true).trigger('change');
	note_form = notes_model.find('#dental-notes-form');
	note_form.attr('action', action);
	note_form.attr('method', method);
	note_form.find('[name="_method"]').val(method);
	notes_model.find('.form-group').removeClass('has-error has-success');
	notes_model.find('[id*="-error"]').remove();
	notes_model.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Dental Notes');
}



function initChart(type) {
	$('.adult_tab').addClass('disabled');
	$('.adult_tab').find('a').removeAttr("data-toggle");
	$('.ped_tab').addClass('disabled');
	$('.ped_tab').find('a').removeAttr("data-toggle");
	$('.close_chart').removeAttr('data-dismiss');

	$('img[usemap]').rwdImageMaps();
	$('area').data('maphilight', {}); //reinitialize
	noOfSelected = 0;
	selectedTeeth = [];
	var treatmentPlan = $('#treatment-plan-modal').is(':visible');
	//alert(treatmentPlan)
	if(treatmentPlan == true) {
		var treatment_plan_chart_ids = $('#treatment-plan-modal').find('#treatment_plan_chart_id').val();
		var treatment_plan_chart_names = $('#treatment-plan-modal').find('#treatment_plan_chart_name').val();
		isSelectionActive = true;
		//alert(noOfSelected)
		if(treatment_plan_chart_ids != "") {
			var treatment_plan_chart_ids_array = treatment_plan_chart_ids.split(",");
			var treatment_plan_chart_names_array = treatment_plan_chart_names.split(",");
			noOfSelected = treatment_plan_chart_ids_array.length;
			$.each(treatment_plan_chart_ids_array, function(key, value){
				selectedTeeth.push({ 'id': value, 'name':  treatment_plan_chart_names_array[key]});
				$('area#'+value).attr('data-highlight', true);
				$('area#'+value).data('maphilight', {
					fillColor: 'CCCCCC',
					fillOpacity: 1,
					stroke:true,
					 strokeColor: 'FD0505',
					alwaysOn:true
				});
			});
			$('.number_selected').html(noOfSelected+' selected');
			$('.view_chart_header').hide();
			$('.add_chart_header').show();
		}
		if(noOfSelected <= 0) {
			$('.view_chart_header').show();
			$('.add_chart_header').hide();
		}
		setTimeout(function() {
			$('.'+type).maphilight();
			$('#spin-loading-adult').addClass('hide');
			$('#spin-loading-pediatric').addClass('hide');

			$('.adult_tab').removeClass('disabled');
				$('.adult_tab').find('a').attr("data-toggle","tab");
				$('.ped_tab').removeClass('disabled');
				$('.ped_tab').find('a').attr("data-toggle","tab");
				$('.close_chart').attr('data-dismiss', 'modal');
		}, 400);
	} else {
		// GET DATA NYA DARI SINI FERIKIM
		$.ajax({
			type:'GET',
			dataType:'json',
			url: "https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-dental-chart-data",
			success:function(data){
				$.each(data, function(key, value){
					$('area#'+value.chart_id).attr('data-highlight', true);
					$('area#'+value.chart_id).data('maphilight', {
						fillColor: value.color_code,
						fillOpacity: 0.5,
						stroke:false,
						// strokeColor: 'ffffff',
						alwaysOn:true
					});
				});
				setTimeout(function() {
					$('.'+type).maphilight();
					$('#spin-loading-adult').addClass('hide');
					$('#spin-loading-pediatric').addClass('hide');

					$('.adult_tab').removeClass('disabled');
	   				$('.adult_tab').find('a').attr("data-toggle","tab");
	   				$('.ped_tab').removeClass('disabled');
	   				$('.ped_tab').find('a').attr("data-toggle","tab");
	   				$('.close_chart').attr('data-dismiss', 'modal');
				}, 400);
			}
		});
	}
}

function emptySelectedNotes(chart_name){
	isSelectionActive = false;
	noOfSelected = 0;
	selectedTeeth = [];
	$('.view_chart_header').show();
	$('.add_chart_header').hide();
	$('#spin-loading-adult').removeClass('hide');
	$('#spin-loading-pediatric').removeClass('hide');
	var chart_modal = $('#dental-chart-modal').is(':visible');

	if(chart_modal == true){
		//if(chart_name != '' && chart_name != undefined){
			if($('.ped_tab').hasClass('active')) {
				initChart('pediatric');
			}
			if($('.adult_tab').hasClass('active')) {
				initChart('adult');
			}

			/*if($.isNumeric(chart_name)){
				initChart('adult');
			}else{
				var name = chart_name.replace(/,/g,"");
				if($.isNumeric(name)){
					initChart('adult');
				}else{
					initChart('pediatric');
				}
			}*/
		//}
	}
}

function setCookie(inputs) {
  /* cookie name */
  var name = (inputs[0]) ? inputs[0] : "key" + document.cookie.length;
  var date = new Date();
  date.setTime(date.getTime() + 100000);
  var expires = "; expires=" + date.toGMTString();
  setTimeout(function() {
  	document.cookie = name + "=" + encodeURIComponent(inputs[1]) + expires+";path=/";
  }, 300);
}

/* get the cookie based on input */
function getCookie(input) {
	var cookies = "";
	if (cookies == null || cookies == undefined || cookies == '') {
		return null; 
	}
	return cookies;
}
</script><script type="text/javascript">
$(function(){
	var body = $('body');
	var format = "mm/dd/yyyy";
	var formatMoment = "MMM DD, YYYY";
	var dateToday = moment(new Date()).tz("Asia/Jakarta").format(format.toUpperCase());
//alert(new Date(moment(new Date()).tz("Asia/Jakarta")));
	$("#note_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});

	$("#note_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    maxDate: new Date(moment(new Date()).tz("Asia/Jakarta")),
	    dateFormat: body.data('datepicker-format'),
	});

	$("input[name='color_code']").change(function(){
		var color_code = $(this);
		$('label').css({'border':'4px'});
		color_code.closest('label').css({'border':'2px solid black'});
	});

	$('#dental-notes-modal').on('hidden.bs.modal', function(e){
		$('input[name="color_code"]').prop('checked', false);
		$('label').css({'border':'0'});
	});

	$('#dental-notes-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#dental-notes-form');
		/**/
		var modal = $(this);
		if(action){
			form.attr('action', action);
		}
		if(method){
			form.attr('method', method);
			form.find('[name="_method"]').val(method);	
		}
		
		if(method == 'PUT'){
			$('#go_to_dental_chart').hide();
			var details_url = button.data('details');
			if(details_url){
				showLoader();
				$.ajax({
	                url: details_url,
	                type: 'GET',
	            }).done(function(response){
	            	var procedures = response.procedures;
	            	procedures.forEach(function(procedure) {
	            		var Values = new Option(procedure.name, procedure.id, false, true);
	            		$("#procedure_id").append(Values).trigger('change');
					});
	                if(response.color_code != ''){
						$("input[name=color_code][value=" + response.color_code + "]").prop('checked', true).trigger('change');
					}
					if(response.chart_id != 0){
						modal.find('#chart_id').val(response.chart_id);
						modal.find('#chart_name').val(response.chart_name);

						if(response.chart_id <= 32){
							modal.find('#tooth_name').html('<label>Tooth Number: &nbsp;</label>'+response.chart_name_display);
						}else{
							if($.isNumeric(response.chart_name_display)) {
								modal.find('#tooth_name').html('<label>Tooth Number: &nbsp;</label>'+response.chart_name_display);
							} else {
								modal.find('#tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+response.chart_name_display);	
							}
						}
					}else{
						modal.find('#chart_id').val('');
						modal.find('#chart_name').val('');
						modal.find('#tooth_name').html('');
					}
					if(response.note_date_form != ''){
						modal.find('#note_date').val(response.note_date_form);
					}else{
						modal.find('#note_date').val('');
					}
					$('#notes').val(response.notes);
					hideLoader();
	            }).fail(function() {
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}
			
			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Dental Notes');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}
		if(method == 'POST'){
			hideLoader();
			$('#notes').val('');
			modal.find('#chart_id').val('');
			modal.find('#chart_name').val('');
			modal.find('#note_date').val(dateToday);
			modal.find('#procedure_id').val(null).trigger('change');
			$('#dental-notes-modal').find('#tooth_name').html('');
			$('input[name="color_code"]').prop('checked', false);
			$('label').css({'border':'4px'});
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Dental Notes');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
			$('#go_to_dental_chart').show();

		}
		var chart_id = $('#chart_id').val();
		if(method == undefined){
			if(chart_id){
				$('#go_to_dental_chart').hide();
			}else{
				$('#go_to_dental_chart').show();
			}
		}
	});

	$('#dental-notes-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		$('#notes').val('');
		modal.find('#chart_id').val('');
		modal.find('#chart_name').val('');
		modal.find('#note_date').val(dateToday);
		modal.find('#procedure_id').val(null).trigger('change');
		modal.find("#procedure_id").html("");
		$('#dental-notes-modal').find('#tooth_name').html('');
		$('input[name="color_code"]').prop('checked', false);
		$('label').css({'border':'4px'});
		modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Dental Notes');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
		$('#go_to_dental_chart').show();
	});

	$('#dental-notes-form').find("#procedure_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        dropdownParent: $('#dental-notes-form'),
        multiple:true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/procedures/procedure-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
	}).on('change.select2', function (e){
		$(this).valid();
	});
});
function showLoader()
{
    $('.loader').show();
    $('.form-content').hide();
    $('#btn_save_notes').attr('disabled', true);
}

function hideLoader()
{
    $('.loader').hide();
    $('.form-content').show();
    $('#btn_save_notes').removeAttr('disabled');
}
</script><script type="text/javascript">
$(function(){
	$('#chart-note-modal').on('show.bs.modal', function(e){
		var note_modal = $('#dental-notes-modal');
		var chart_id = note_modal.find('#chart_id').val();
		var chart_name = note_modal.find('#chart_name').val();
		
		var dentalChartTable = $('#dental-chart-notes-table').DataTable({
			processing: true,
		    serverSide: true,
		    scrollY:"65vh",
		    scrollCollapse: true,
		    "dom": '<"top">rt<"bottom">',
		    "deferLoading":0,
		    "pageLength":50,
		    "bDestroy": true,
		    ajax: {
		        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-dental-chart-note-datas',
		        method: 'POST',
		        data: {chart_id:chart_id,chart_name:chart_name}
		    },
		    columns: [
		    	{ data: 'color', name: 'color', orderable: false, searchable: false, className : 'text-center',width:'50px'},
		    	{ data: 'details', name: 'notes', orderable: false, searchable: false},
		    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'80px'},
		    ],
		    fnDrawCallback: function ( oSettings ) {
		    	$('a#btn-chart-delete').click(function(){
		    		var action = $(this).data('action');
					swal({
					    title: 'Are you sure?',
					    text: "You will not be able to recover this Note!",
					    type: 'warning',
					    showCancelButton: true,
					    confirmButtonColor: '#3085d6',
					    cancelButtonColor: '#d33',
					    confirmButtonText: 'Yes, delete it!',
                        showLoaderOnConfirm: true,
                        preConfirm: function(){
                            return new Promise(function(){
                                    $.ajax({
                                        type: "DELETE",
                                        url: action,
                                        dataType: 'json',
                                        success: function(data) {
                                            if(data.type == "success") {
                                                swal({
                                                    title:  'Deleted!',
                                                    text:   data.message,
                                                    type:   'success'
                                                });
                                                $('#dental-notes-table').DataTable().draw();
                                                $('#dental-chart-table').DataTable().draw();
                                                dentalChartTable.draw();
                                                $('#spin-loading-adult').removeClass('hide');
												$('#spin-loading-pediatric').removeClass('hide');
                                                if(chart_name != ''){
													if(!isNaN(chart_name)){
														initChart('adult');//dental-chart-modaljs
													}else{
														initChart('pediatric');//dental-chart-modaljs
													}
												}
                                                $('.dental-notes-count').html(data.count);
                                                $('.dental-chart-count').html(data.count_chart);
                                           }else{
                                                swal({
                                                    title:  'Error!',
                                                    text:   data.message,
                                                    type:   'error'
                                                });
                                           }
                                        },
                                        error :function( jqXhr ) {
                                            swal(
                                              'Error!',
                                              'Something went wrong.',
                                              'error'
                                            );        
                                        }
                                    });
                            });
                        },
                        allowOutsideClick: false
					});
		    	});
		    },
		    "order": [],
		});
		dentalChartTable.draw();
	});
	$('#btn-add-another-note').click(function(){
		var chart_id = $('#chart_id_val').val();
		var chart_name = $('#chart_name_val').val();

		$('#dental-notes-modal').find('#chart_id').val(chart_id);
		$('#dental-notes-modal').find('#chart_name').val(chart_name);
		if($.isNumeric(chart_name)){
			$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name);
		}else{
			$('#dental-notes-modal').find('#tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name);
		}
		showDentalNotesModal();
	});
	$('#chart-note-modal').on('hidden.bs.modal', function(e){
		$('#dental-chart-notes-table').DataTable().destroy();
		var chart = $('#dental-chart-modal').is(':visible');
		if(chart == true){
			$("body").addClass("modal-open");
		}
	});
});
</script><script type="text/javascript">
$(function(){
	var body = $('body');
	var format = "mm/dd/yyyy";
	var formatMoment = "MMM DD, YYYY";
	var dateToday = moment(new Date()).tz("Asia/Jakarta").format(format.toUpperCase());
//alert(new Date(moment(new Date()).tz("Asia/Jakarta")));
	$("#request_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});

	$("#request_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    maxDate: new Date(moment(new Date()).tz("Asia/Jakarta")),
	    dateFormat: body.data('datepicker-format'),
	});


	$('#request-forms-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#request-forms-form');
		/**/
		var modal = $(this);
		if(action){
			form.attr('action', action);
		}
		if(method){
			form.attr('method', method);
			form.find('[name="_method"]').val(method);	
		}
		
		if(method == 'PUT'){
			var details_url = button.data('edit-url');
			if(details_url){
				showLoader();
				$.ajax({
	                url: details_url,
	                type: 'GET',
	            }).done(function(response){
	            	console.log(response);
					if(response.request_date_form != ''){
						modal.find('#request_date').val(response.request_date_form);
					}else{
						modal.find('#request_date').val('');
					}
					modal.find('#requests').val(response.requests);
					modal.find('#request_remarks').val(response.remarks);
					hideLoader();
	            }).fail(function() {
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}
			
			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Request');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}

		if(method == 'POST'){
			hideLoader();
			modal.find('#requests').val('');
			modal.find('#request_remarks').val('');
			modal.find('#request_date').val(dateToday);
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Request');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();

		}
	});

	$('#request-forms-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);


		modal.find('#requests').val('');
		modal.find('#request_remarks').val('');
		modal.find('#request_date').val(dateToday);
		modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Request');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

});
function showLoader()
{
    $('.loader').show();
    $('.form-content').hide();
    $('#btn_save_request_forms').attr('disabled', true);
}

function hideLoader()
{
    $('.loader').hide();
    $('.form-content').show();
    $('#btn_save_request_forms').removeAttr('disabled');
}
</script><script type="text/javascript">
$(function(){
	var body = $('body');
	var format = "mm/dd/yyyy";
	var formatMoment = "MMM DD, YYYY";
	var dateToday = moment(new Date()).tz("Asia/Jakarta").format(format.toUpperCase());
//alert(new Date(moment(new Date()).tz("Asia/Jakarta")));
	$("#certificate_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});

	$("#certificate_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    maxDate: new Date(moment(new Date()).tz("Asia/Jakarta")),
	    dateFormat: body.data('datepicker-format'),
	});


	$('#dental-certificates-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#dental-certificates-form');
		/**/
		var modal = $(this);
		if(action){
			form.attr('action', action);
		}
		if(method){
			form.attr('method', method);
			form.find('[name="_method"]').val(method);	
		}
		
		if(method == 'PUT'){
			var details_url = button.data('edit-url');
			if(details_url){
				showLoader();
				$.ajax({
	                url: details_url,
	                type: 'GET',
	            }).done(function(response){

	            	var procedures = response.procedures;
	            	procedures.forEach(function(procedure) {
	            		var Values = new Option(procedure.name, procedure.id, false, true);
	            		modal.find("#certificate_procedure_id").append(Values).trigger('change');
					});
					if(response.request_date_form != ''){
						modal.find('#certificate_date').val(response.certificate_date_form);
					}else{
						modal.find('#certificate_date').val('');
					}
					modal.find('#certificate_remarks').val(response.remarks);
					hideLoader();
	            }).fail(function() {
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}
			
			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Certificate');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}

		if(method == 'POST'){
			hideLoader();
			modal.find('#certificate_remarks').val('');
			modal.find('#certificate_date').val(dateToday);
			modal.find('#certificate_procedure_id').val(null).trigger('change');

			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Certificate');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();

		}
	});

	$('#dental-certificates-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);


		modal.find('#certificate_remarks').val('');
		modal.find('#certificate_date').val(dateToday);
		modal.find('#certificate_procedure_id').val(null).trigger('change');
		modal.find("#certificate_procedure_id").html("");
		modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Certificate');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	$('#dental-certificates-form').find("#certificate_procedure_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        dropdownParent: $('#dental-certificates-form'),
        multiple:true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/procedures/procedure-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
	}).on('change.select2', function (e){
		$(this).valid();
	});

});
function showLoader()
{
    $('.loader').show();
    $('.form-content').hide();
    $('#btn_save_dental_certificates').attr('disabled', true);
}

function hideLoader()
{
    $('.loader').hide();
    $('.form-content').show();
    $('#btn_save_dental_certificates').removeAttr('disabled');
}
</script>
<script type="text/javascript">
$(function(){
  var body = $('body');

	$("#appointment_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});
	var array = [];
	$("#appointment_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    minDate: new Date(),
      dateFormat: body.data('datepicker-format'),
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          console.log(string);
          return [ array.indexOf(string) == -1 ]
      }
	});
	$(".timepicker").timepicker({
  		showInputs: false,
  		defaultTime: '09:00 AM',
  		minuteStep : 15,
  		interval : 15
	});
	$(".timepicker_to").timepicker({
  		showInputs: false,
  		defaultTime: '10:00 AM',
  		minuteStep : 15,
  		interval : 15
	});

	$('input[name="no_show"]').iCheck({
	    checkboxClass: 'icheckbox_square-blue',
	    radioClass: 'iradio_square-blue',
	    increaseArea: '0' // optional
	});

	$('#appointment-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#appointment-form');

		var modal = $(this);

		form.attr('action', action);
		form.attr('method', method);
		form.find('[name="_method"]').val(method);

		if(method == 'PUT'){
			var date = button.data('date');
			var time = button.data('time');
			var time_to = button.data('time_to');
			var notes = button.data('notes');
			var user_fullname = button.data('user-fullname');
			var user_id = button.data('user-id');
			var user_select2 = new Option(user_fullname, user_id, true, true);
			$('#appointment_date').val(date);
			$('#appointment_time').val(time);
			$('#appointment_time_to').val(time_to);
			$('#appointment_notes').val(notes);
			modal.find('.clinic_user_id').append(user_select2);

			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Appointment');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}
		if(method == 'POST'){
			$('#appointment_date').val('');
			$('#appointment_notes').val('');
			modal.find('.clinic_user_id').val('').trigger('change.select2');
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Appointment');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();

            var role_type = $('input[name="role_type"]').val();
            var user_id = $('input[name="user_id"]').val();
            var user_fullname = $('input[name="user_fullname"]').val();
            if(role_type == 1){
                var user_select2 = new Option(user_fullname, user_id, true, true);
                modal.find('.clinic_user_id').append(user_select2);
            }else{
                modal.find('.clinic_user_id').val('').trigger('change.select2');
            }
		}
	});

	$(".clinic_user_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/dentist-list-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    });

    $(".clinic_user_id_option").select2({
        placeholder: {
            id: '-1', 
            text: ' - All Dentist - '
        },
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/dentist-list-select2?filter=true',
            delay: 400,
            data: function (params) {
              return {
                name: params.term,
                placeholder: {
                    id: '-1',
                    text: ' - All - '
                },
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    });
});
</script><script type="text/javascript">
$(function(){
	$('#photo-modal').on('hide.bs.modal', function(e){
		$("#patient_photo").fileinput('clear');
	});
	$('#photo-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#photo-form');

		var modal = $(this);
		var filename = button.data('filename');
		form.attr('action', action);
		form.attr('method', method);
		form.find('[name="_method"]').val(method);
		// $("#patient_photo").fileinput('');
		photoFileinput(filename);
			if(method == 'PUT'){
				var caption = button.data('caption');
				modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Dental Photos');
				modal.find('#caption').val(caption);
				// modal.find('#photo-preview').attr('src', filename)
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}
			if(method == 'POST'){
				modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Dental Photos');

				modal.find('#caption').val('');
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}
	});

	$('#patient_photo').on('change', function(){
	    $('#image_snapshot').val('');
	});
});

function photoFileinput(photo_url)
{
	var btnCust = '<button type="button" class="btn btn-default hidden-xs hidden-sm hidden-md" title="Webcam Capture" ' + 
	    'data-toggle="modal" data-target="#photo-capture-modal">' +
	    '<i class="glyphicon glyphicon-camera clinic-text-gray"></i>' +
	    '</button>';

	if(navigator.userAgent.toLowerCase().indexOf("android") > -1 || navigator.userAgent.toLowerCase().indexOf("iphone") > -1){
		var browse_icon = '<i class="glyphicon glyphicon-camera"></i> &nbsp;&nbsp;Capture';
	}else{
		var browse_icon = '<i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp;Browse';
	}

	$("#patient_photo").fileinput('refresh',{
	    overwriteInitial: true,
	    maxFileSize: 10240,
	    showClose: false,
	    showCaption: false,
	    browseLabel: '',
	    removeLabel: '',
	    browseIcon: browse_icon,   
	    removeIcon: '<i class="glyphicon glyphicon-remove clinic-text-gray"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="'+photo_url+'" alt="Your Avatar" >',
	    layoutTemplates: {
	        main2: '{preview} '+btnCust+' {remove} {browse}',
	    },
	    previewFileType: ["jpg", "png", "gif"]
	});
}

function readURL(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#photo-preview').attr('src', reader.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
</script><script type="text/javascript">
$(function(){
    $('#photo-capture-modal').on('show.bs.modal', function(e){
        webcam();
        Webcam.unfreeze();
        $('#photo_snapshot_again').addClass('hide');
        $('#photo_snapshot').removeClass('hide');
    });
    $('#photo-capture-modal').on('hide.bs.modal', function(e){
        Webcam.reset();
    })
    $('#photo_snapshot').on('click', function(){
        
        $('#patient_photo').fileinput('clear');
        preview_snapshot();
        $(this).addClass('hide');
        $('#photo_snapshot_again').removeClass('hide');
    });
    $('#photo_snapshot_again').on('click', function(){
        Webcam.unfreeze();
        $(this).addClass('hide');
        $('#photo_snapshot').removeClass('hide');
    });
    $('#photo_snapshot_close').on('click', function(){
        $('#photo-capture-modal').modal('hide');
    });
    $('.fileinput-remove-button').on('click', function(){
        $('#image_snapshot').val('');
    });
});

function webcam(){
    Webcam.on( 'error', function(err) {
        alert('Webcam device not found');
    } );

    Webcam.set({
        width: 560,
        height: 460,
        dest_width: 640,
        dest_height: 480,       
        // dest_width: 630,
        // dest_height: 470,
   
        crop_width: 0,
        crop_height: 0,
   
        image_format: 'jpeg',
        jpeg_quality: 90,
        flip_horiz: true,
        force_flash: false,
    });
    Webcam.attach( '#photo_image' );
}

function preview_snapshot(){
    Webcam.snap(function(data_uri) {
        // console.log(b);
        $('.file-default-preview').html('<img src="'+data_uri+'" alt="Your Avatar">');
        $('#image_snapshot').val(data_uri);
         // document.getElementById('myImage').value = data_uri;
    });

    // freeze camera so user can preview current frame
    Webcam.freeze();
}
</script><script>
    jQuery(document).ready(function(){

        $("#payment-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"payment_date":{"laravelValidation":[["Required",[],"Please provide payment date.",true]]},"amount":{"laravelValidation":[["Required",[],"Please provide payment amount.",true],["Regex",["\/^\\d*(\\.\\d{1,2})?$\/"],"The amount format is invalid.",false]]},"method_id":{"laravelValidation":[["Required",[],"Please provide payment method.",true]]},"insurance_id":{"laravelValidation":[["RequiredIf",["method","Insurance"],"Please provide insurance.",true]]},"downpayment":{"laravelValidationRemote":[["LessThanField",["downpayment","eyJpdiI6ImVLcEg2VGFBaUlvQ1lCb2RFVTVuZWc9PSIsInZhbHVlIjoiWUQ4SjRkaHFSenFUcmtoTlFzUDNXb0tNczl0WUI2WGRSSStQbkZ6V0tUcVwvbVd1TzJ6THZIazBuZHd3M29KVTYzRVVETXgyODFNc3p3ejd5OVpcL2Yrdz09IiwibWFjIjoiODNhNWU2NjhlYTIxZjg1ODU3NGQzNDQ1ZGM5Zjk3NjkwZTBhYTU3YWZlMzI0ODk3NWVjNTc1NDE0NjU2YzkzNyJ9",false],"Initial \/ Downpayment exceeds the total amount.",false]]},"clinic_user_id":{"laravelValidation":[["Required",[],"The dentist field is required.",true]]},"plan_name":{"laravelValidation":[["RequiredIf",["payment_type","Installment"],"Please provide plan name",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("#installment-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"payment_date":{"laravelValidation":[["Required",[],"Please provide payment date.",true]]},"amount":{"laravelValidation":[["Required",[],"Please provide payment amount.",true],["Regex",["\/^\\d*(\\.\\d{1,2})?$\/"],"The amount format is invalid.",false]]},"method_id":{"laravelValidation":[["Required",[],"Please provide payment method.",true]]},"insurance_id":{"laravelValidation":[["RequiredIf",["method","Insurance"],"Please provide insurance.",true]]},"downpayment":{"laravelValidationRemote":[["LessThanField",["downpayment","eyJpdiI6IjFDNkFIUERyQU9ZT1RhVVdFYzhDZUE9PSIsInZhbHVlIjoiZXZBXC96Q1BsV00yV0VpOEhGWXlBT1wvZldoR3V6aWZSM1hPb2J5eU15em42ZDdcLzJqSjNFaU96eUF4K2RFMW9XajVhQ0liS05lMHNxaVwvZmR4STZFbnpBPT0iLCJtYWMiOiJjY2QyOWEwZThiNjgyYzk0MDkxZmE2YTQ1YTg4MmJkM2I2MzNjODJmN2UwMjZjZWJhMDZkYTU3ZjkxNWQyNzc0In0=",false],"Initial \/ Downpayment exceeds the total amount.",false]]},"clinic_user_id":{"laravelValidation":[["Required",[],"The dentist field is required.",true]]},"plan_name":{"laravelValidation":[["RequiredIf",["payment_type","Installment"],"Please provide plan name",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("#installment-payment-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"installment_date":{"laravelValidation":[["Required",[],"Please provide payment date.",true]]},"installment_amount":{"laravelValidation":[["Required",[],"Please provide payment amount.",true],["Regex",["\/^\\d*(\\.\\d{1,2})?$\/"],"The installment amount format is invalid.",false]]},"method_id":{"laravelValidation":[["Required",[],"Please provide payment method.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function() {
    var body = $('body');

	$("#payment_date, #initial_due_date, #installment_date, #initial_payment_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});
	$("#payment_date, #initial_due_date, #installment_date, #initial_payment_date").datepicker({
        changeMonth: true,
	    changeYear: true,
        dateFormat: "mm/dd/yyyy",
        dateFormat: body.data('datepicker-format'),
    });

    paymentTable = $('#payment-table-cash').DataTable({
        processing: true,
        serverSide: true,
        "pagingType": "input",
        ajax: {
            url: "https://web.dentalclinicapp.com/clinic/patient/payment/full-payment-data/BD4Padp3Jr",
            method: 'POST'
        },
        columns: [
            {
                width:'10px', searchable: false, orderable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }, className: "text-center"
            },
            { data: 'details', name: 'payment_date', orderable: true, searchable: false},
            { data: 'dental_note', name: 'dental_note', orderable: false, searchable: false},
            // { data: 'payment_method', name: 'method', orderable: false, searchable: true},
            // { data: 'updated_date', name: 'updated_at', orderable: true, searchable: false},
            { data: 'remarks', name: 'remarks', orderable: false, searchable: true, width:'250px'},
            { data: 'action', name: 'action', orderable: false, searchable: false, width:'60px', className: 'text-center'}
        ],
        fnDrawCallback: function ( oSettings ) {
            var json = this.api().ajax.json();
            var total_payment = json.total['payment'];
            var total_balance = json.total['balance'];
            $('#total_payment').text(total_payment);
            $('#total_balance').text(total_balance);

             paymentTable.$('a#btn-payment-delete').click(function(){
                var action = $(this).data('action');
                swal({
                    title: 'Are you sure?',
                    text: "You will not be able to recover this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    showLoaderOnConfirm: true,
                    preConfirm : function(){
                        return new Promise(function(){
                            $.ajax({
                                type: "DELETE",
                                url: action,
                                dataType: 'json',
                                success: function(data) {
                                    if(data.type == "success") {
                                        swal({
                                            title:  'Deleted!',
                                            text:   data.message,
                                            type:   'success'
                                        });
                                        paymentTable.draw();
                                   }else{
                                        swal({
                                            title:  'Error!',
                                            text:   data.message,
                                            type:   'error'
                                        });
                                   }
                                },
                                error :function( jqXhr ) {
                                    swal(
                                      'Error!',
                                      'Something went wrong.',
                                      'error'
                                    );        
                                }
                            });
                        });
                    },
                    allowOutsideClick: false
                });
            });
        },
        "order": [[4, "desc"]],
    });

    paymentInstallmentTable = $('#payment-installment-table').DataTable({
        processing: true,
        serverSide: true,
        searching: false, 
        info: false,
        "lengthChange": false,
        ordering: false,
        deferLoading: 0,
        ajax: {
            url:'https://web.dentalclinicapp.com/clinic/patient/payment/installment-data/BD4Padp3Jr',
            method: 'POST',
            data: function(d){
                d.sort_by = $('#payment_sort').val();
                d.order_by = $('#payment_order').val();
            }
        },
        columns: [
            {
                width:'10px', searchable: false, orderable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }, className: "text-center"
            },
            { data: 'details', name: 'payment_date', orderable: true, searchable: true},
            { data: 'action', name: 'action', orderable: false, searchable: false, width:'80px', className: 'text-center'}
        ],
        fnDrawCallback: function ( oSettings ) {
            var json = this.api().ajax.json();
            if(json != undefined) {
                var total_payment = json.total['payment'];
                var total_balance = json.total['balance'];
                $('#total_payment').text(total_payment);
                $('#total_balance').text(total_balance);
            }

            if(json != undefined) {
                paymentInstallmentTable.$('a#btn-installment-delete').click(function(){
                    var action = $(this).data('action');
                    swal({
                        title: 'Are you sure?',
                        text: "You will not be able to recover this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        showLoaderOnConfirm: true,
                        preConfirm : function(){
                            return new Promise(function(){
                                $.ajax({
                                    type: "DELETE",
                                    url: action,
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.type == "success") {
                                            swal({
                                                title:  'Deleted!',
                                                text:   data.message,
                                                type:   'success'
                                            });
                                            paymentInstallmentTable.draw();
                                       }else{
                                            swal({
                                                title:  'Error!',
                                                text:   data.message,
                                                type:   'error'
                                            });
                                       }
                                    },
                                    error :function( jqXhr ) {
                                        swal(
                                          'Error!',
                                          'Something went wrong.',
                                          'error'
                                        );        
                                    }
                                });
                            });
                        },
                        allowOutsideClick: false
                    });
                });
            }
        },
        "order": [[1, 'desc']],
    });

    $('#payment_sort').on('change',function(){
        paymentInstallmentTable.draw();
    });

    $('#payment_order').on('change',function(){
        paymentInstallmentTable.draw();
    });

    $('#note-payments').collapse('show');
});
</script><script type="text/javascript">
    payment_notes_rows_selected = []; // Array holding selected row IDs
    payment_notes_rows_details_selected = {}; // Array holding selected row IDs
    function computeTotalProcedureAmount()
    {
        var full_payment_tab = $('#li-cash').hasClass('active');
        var total_amount = 0;
        var withNoteField = false;
        $('body').find(".procedure_total_amount" ).each(function( index ) {
            var amount = parseFloat($( this ).val());

            total_amount = (total_amount + amount);
            withNoteField = true;
        });
        var el_amount;
        if(full_payment_tab) {
            el_amount =  $('form#payment-form').find('#amount');
        } else {
            el_amount =  $('form#installment-form').find('#initial_amount');    
        }
        if(withNoteField == true) {
            el_amount.val(total_amount);
            el_amount.attr('readonly', true);
        } else {
            el_amount.val("");
            el_amount.removeAttr('readonly');
        }
    }

    function computeTotalPerProcedure(element, field)
    {   
        var _this = $(element);
        var note_id = _this.attr('data-note_id');
        var procedure_id = _this.attr('data-procedure_id');

        var idnumber = note_id.toString()+procedure_id.toString();
        var total_amount = 0;

        if(field == 'amount') {
            var amount = parseFloat(_this.val());
            if(amount > 0) {
                var quantity = parseInt($('body').find("#payment_procedure_quantity"+idnumber).val());
                total_amount = (amount * quantity);
            } 
        }

        if(field == 'quantity') {
            var amount = parseFloat($('body').find("#payment_procedure_amount"+idnumber).val());
            if(amount > 0) {
                var quantity = parseInt(_this.val());
                total_amount = (amount * quantity);
            } 
        }


        $('body').find("#payment_procedure_total_amount"+idnumber).val(total_amount);
        computeTotalProcedureAmount();
        /*$('form#payment-form').find('#amount').val(total_amount);
        $('form#payment-form').find('#amount').attr('readonly', true);*/
    }

    function removePaymentNote(element){
        var _this = $(element);
        var rowId = _this.attr('data-rowId');
        console.log(payment_notes_rows_selected);
        _this.closest('.payment_notes_wrapper').remove();
        var index = $.inArray(rowId, payment_notes_rows_selected);
        if(index !== -1){
            payment_notes_rows_selected.splice(index, 1);
            delete payment_notes_rows_details_selected[rowId];
        }
        var full_payment_tab = $('#li-cash').hasClass('active');
        if(full_payment_tab) {
            $('#payment_selected_notes_id_value').val(payment_notes_rows_selected);
        } else {
            $('#install_payment_selected_notes_id_value').val(payment_notes_rows_selected);
        }
        computeTotalProcedureAmount();
    }
$(function(){
    
	
	var paymentSelectNotesForm = $('form#payment-select-notes-form');
	var paymentSelectNotesTable = $('#payment-select-notes-table').DataTable({
		processing: true,
	    serverSide: true,
	    searching: false, 
	    info: false,
	    paging: false,
	    ordering: false,
	    destroy: true,
        deferLoading:0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/select-dental-notes',
	        method: 'POST',
            data: function ( d ) {
                d.input_type = "checkbox";
                d.with_input_field = true;
                d.payment_id = $('#payment-modal').find('#note_payment_id').val();
                d.note_id = $('#payment-select-notes-modal').find('#selected_note_id').val();
            }
	    },
	    columns: [
	    	{ data: 'checkmark', name:'id',orderable: false, searchable:false,  width:'30px', className:'td_note_checkbox'},
	    	{ data: 'details', name: 'updated_at', orderable: false, searchable: true},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('.select-dental-notes').iCheck({
				checkboxClass: 'icheckbox_square-blue',
			    radioClass: 'iradio_square-blue',
			    increaseArea: '0'
		    });

		   // var info = this.api().page.info();
	    	//$('#notes_data_total').val(info.recordsDisplay);
	    },
	    rowCallback: function(row, data, dataIndex){
            var rowId = data['id']; // Get row ID
         /*   console.log(payment_notes_rows_selected);
           */
            var rowDetails= data['payment_details'];
            console.log(rowDetails);
            console.log("rowCallback");
            var selected_notes_id_value = "";
            var full_payment_tab = $('#li-cash').hasClass('active');
            if(full_payment_tab) {
                selected_notes_id_value = $('#payment_selected_notes_id_value').val();
            } else {
                selected_notes_id_value = $('#install_payment_selected_notes_id_value').val()
            }
            console.log(rowId);
            console.log(payment_notes_rows_selected);
            if($.inArray(rowId, payment_notes_rows_selected) !== -1){ // If row ID is in the list of selected row IDs
                payment_notes_rows_details_selected[rowId] = rowDetails;
                $(row).find('input[class="select-dental-notes"]').prop('checked', true);
                $(row).addClass('selected');
            } else {
                delete payment_notes_rows_details_selected[rowId];
            }
        },
	    "order": [[1, 'desc']],
	});

// Handle click on checkbox
    $('#payment-select-notes-table tbody').on('ifChanged', 'input.select-dental-notes', function(e){
        var $row = $(this).closest('tr');
        var data = paymentSelectNotesTable.row($row).data(); // Get row data
        var rowId = data['id']; // Get row ID
        var rowDetails= data['payment_details']; // Get row Details
         /*console.log(payment_notes_rows_details_selected);
         console.log("ifChanged before");*/
        var index = $.inArray(rowId, payment_notes_rows_selected); // Determine whether row ID is in the list of selected row IDs
        //var indexDetails = $.inArray(rowId, payment_notes_rows_details_selected); // Determine whether row ID is in the list of selected row IDs
        
        if(this.checked && index === -1){ // If checkbox is checked and row ID is not in list of selected row IDs
            payment_notes_rows_details_selected[rowId] = rowDetails;
            payment_notes_rows_selected.push(rowId);
            //$(paymentSelectNotesForm).append( $('<input>').attr('type', 'hidden').attr('name', 'select-dental-notes[]').attr('class', 'row'+rowId).val(rowId));
        }else if(!this.checked && index !== -1){ // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
            payment_notes_rows_selected.splice(index, 1);
            delete payment_notes_rows_details_selected[rowId];
            //$('input[type=hidden][class=row'+rowId+']', paymentSelectNotesForm).remove();
        }
        /*console.log(payment_notes_rows_details_selected);
         console.log("ifChanged after");*/
        if(this.checked){
            $row.addClass('selected');
        }else{
            $row.removeClass('selected');
        }
        e.stopPropagation();
    });
    
	$('#payment-select-notes-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		var paymentModal= $('#payment-modal').is(':visible');
		if(paymentModal == true){
			$("body").addClass("modal-open");
		}
	});
	$('#payment-select-notes-modal').on('show.bs.modal', function(e){

        button = $(e.relatedTarget);
		var modal = $(this);
        var full_payment_tab = $('#li-cash').hasClass('active');
        var payment_selected_notes_id_value = "";
        if(full_payment_tab) {
		  var payment_selected_notes_id_value = $('#payment_selected_notes_id_value').val();
        } else {
          var payment_selected_notes_id_value = $('#install_payment_selected_notes_id_value').val();
        }
		if(payment_selected_notes_id_value != ''){
			payment_notes_rows_selected = payment_selected_notes_id_value.split(",");
		}else {
			payment_notes_rows_selected = [];
		}
		paymentSelectNotesTable.draw();
	});

	$('button#payment-select-notes-btn').on('click', function() {
        var btn = $(this);
        btn.button('loading');
        //var selected = $('#payment-select-notes-modal').find('#payment_notes_note_id').val();

        if(payment_notes_rows_selected == "") {
            swal('Please select Dental Note.', '', 'error').catch(swal.noop);
            setTimeout(function(){
	            btn.button('reset');
	        }, 500);
            return false;
        }

        setTimeout(function(){
        	
            var full_payment_tab = $('#li-cash').hasClass('active');
            var el_payment_selected_details;
            var el_payment_selected_notes_id_value;
            if(full_payment_tab) {
                el_payment_selected_details = $('#payment_selected_details');
                el_payment_selected_notes_id_value = $('#payment_selected_notes_id_value');
            } else {
                el_payment_selected_details = $('#install_payment_selected_details');
                el_payment_selected_notes_id_value = $('#install_payment_selected_notes_id_value');
            }
            el_payment_selected_details.html("");

            var counter = 0;
            var htmlPaymentNotes ='';
            console.log(payment_notes_rows_details_selected);
            $.each(payment_notes_rows_details_selected, function (i, value) {
                counter = counter + 1;
                htmlPaymentNotes = '<div class="payment_notes_wrapper">';
                    htmlPaymentNotes += '<div style="border-top: 1px solid #ccc;padding-top:5px;"><b class="pull-left">NOTE&nbsp;'+ (counter) + '&nbsp; PROCEDURES</b> <span class="pull-right"><a href="#" class="btn btn-danger btn-xs btn-flat" data-rowId="'+i+'" onClick="removePaymentNote(this)"><i class="fa fa-times"></i> Remove</a></span></div>';
                    htmlPaymentNotes += value;
                htmlPaymentNotes += '</div>';
                el_payment_selected_details.append(htmlPaymentNotes);
            });

    		el_payment_selected_notes_id_value.val(payment_notes_rows_selected);
            computeTotalProcedureAmount();
            $('#payment-select-notes-modal').find('#selected_note_id').val(0);
        	$('#payment-select-notes-modal').modal('hide');
            btn.button('reset');
        }, 1000);
       return false;
    });

    

    
});
</script><script type="text/javascript">
$(function() {
    var paymentForm = $('#payment-form');
    var installmentForm = $('#installment-form');
    var format = "mm/dd/yyyy";
    var dateToday = moment(new Date()).format(format.toUpperCase());

    $('#payment-modal').on('show.bs.modal', function(e){
        var button = $(e.relatedTarget);
        var action = button.data('action');
        var method = button.data('method');
        var edit_url = button.data('edit-url');
        var note_id = button.data('note_id');
        var selected_note_id = button.data('selected_note_id');
        var payment_tab = button.data('payment_tab');
        /*alert(selected_note_id);
        alert(payment_tab);*/
        var total_amount = button.data('total-amount');

        payment_notes_rows_selected = []; // Array holding selected row IDs
        payment_notes_rows_details_selected = {};
        var modal = $(this);

        $('#payment_selected_details').html("");
        $('#install_payment_selected_details').html("");
        $('#payment_selected_notes_id_value').val("");
        $('#install_payment_selected_notes_id_value').val("");


        modal.find('#note_payment_id').val(0);
        modal.find('#amount').removeAttr('readonly');
        modal.find('#initial_amount').removeAttr('readonly');
        if(action){
            paymentForm.attr('action', action);
            installmentForm.attr('action', action);
        }
        if(method){
            paymentForm.attr('method', method);
            paymentForm.find('[name="_method"]').val(method);

            installmentForm.attr('method', method);
            installmentForm.find('[name="_method"]').val(method);
        }else{
            method = 'POST';
        }

        if(method == 'PUT'){
            modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Payment');
        }

        if(method == 'POST'){
            modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Payment');
            $('#initial_amount').prop('readonly',false);
            var role_type = $('input[name="role_type"]').val();
            var user_id = $('input[name="user_id"]').val();
            var user_fullname = $('input[name="user_fullname"]').val();
            if(role_type == 1){
                var user_select2 = new Option(user_fullname, user_id, true, true);
                $('.payment_user_id').append(user_select2);
            }else{
                $('.payment_user_id').val('').trigger('change.select2');
            }

            var full_payment_tab = $('#full_payment_tab').hasClass('active');
            if(full_payment_tab){
                $('#li-cash').addClass('active');
                $('#li-installment').removeClass('active');
                $('#payment_1').addClass('active');
                $('#payment_2').removeClass('active');
            }else{
                $('#li-cash').removeClass('active');
                $('#li-installment').addClass('active');
                $('#payment_1').removeClass('active');
                $('#payment_2').addClass('active');
            }
            if(total_amount != undefined) {
                modal.find('#amount').val(total_amount);
                modal.find('#initial_amount').val(total_amount);
            }
            modal.find('#payment_date').val(dateToday);
            modal.find('#initial_payment_date').val(dateToday);
        }

        $('#payment-select-notes-modal').find('#selected_note_id').val(0);
        if(selected_note_id !== undefined) {
            if(payment_tab !== undefined) {
                var getPaymentNoteEditURL = button.data('get-payment-note-edit-url');
                if(getPaymentNoteEditURL !== undefined) {
                    if(selected_note_id > 0) {
                        $.ajax({
                            url: getPaymentNoteEditURL,
                            type: 'GET',
                        })
                        .done(function(response){
                            console.log(response)
                            payment_notes_rows_details_selected = response.payment_notes_rows_details_selected;
                            payment_notes_rows_selected = selected_note_id;
                            if(payment_tab == 'fullpayment') {
                                $('#li-cash').addClass('active');
                                $('#li-installment').removeClass('active');
                                $('#payment_1').addClass('active');
                                $('#payment_2').removeClass('active');
                                $('#li-cash').show();
                                $('#li-installment').hide();
                                $('.initial-div').hide();
                                $('#payment_selected_notes_id_value').val(selected_note_id);
                            }

                            if(payment_tab == 'installment') {
                                $('#li-cash').removeClass('active');
                                $('#li-installment').addClass('active');
                                $('#payment_1').removeClass('active');
                                $('#payment_2').addClass('active');
                                $('#li-cash').hide();
                                $('#li-installment').show();
                                $('.initial-div').show();
                                $('#install_payment_selected_notes_id_value').val(selected_note_id);
                            }
                            var counter = 0;
                            var htmlPaymentNotes ='';
                            $.each(payment_notes_rows_details_selected, function (i, value) {
                                counter = counter + 1;
                                htmlPaymentNotes = '<div class="payment_notes_wrapper">';
                                    htmlPaymentNotes += '<div style="border-top: 1px solid #ccc;padding-top:5px;"><b class="pull-left">NOTE&nbsp;'+ (counter) + '&nbsp; PROCEDURES</b> <span class="pull-right"><a href="#" class="btn btn-danger btn-xs btn-flat" data-rowId="'+i+'" onClick="removePaymentNote(this)"><i class="fa fa-times"></i> Remove</a></span></div>';
                                    htmlPaymentNotes += value;
                                htmlPaymentNotes += '</div>';
                                if(payment_tab == 'installment') {
                                    $('#install_payment_selected_details').append(htmlPaymentNotes);
                                }
                                if(payment_tab == 'fullpayment') {
                                    $('#payment_selected_details').append(htmlPaymentNotes);
                                }
                            });
                            computeTotalProcedureAmount();
                        }).fail(function() {
                            //alert('failed');

                        });
                    }
                }

                /**/
                //$('#payment-select-notes-modal').find('#selected_note_id').val(selected_note_id);
                //$('#payment-select-notes-modal').modal({'backdrop':'static'}, $( "#payment_select_note_btn" ));
            }

        }

        if(note_id){
            modal.find('#note_id').val(note_id);
            modal.find('#initial_note_id').val(note_id);
        }

        if(edit_url != undefined && edit_url != ''){
            modal.find('.loader').show();
            modal.find('.form-content').hide();
            modal.find('#payment-btn').attr('disabled', true);
            $.ajax({
                url: edit_url,
                type: 'GET',
            })
            .done(function(response){
                var payment = response.payment; 
                if(payment.note_ids_arr.length > 0) {
                    payment_notes_rows_details_selected = response.payment_notes_rows_details_selected;
                    payment_notes_rows_selected = payment.note_ids_arr;
                }
                var admin = response.admin;
                var payment_method = response.payment_method;
                modal.find('#note_payment_id').val(payment.id);
                if(payment.payment_type.toLowerCase() == 'cash'){
                    $('#li-cash').addClass('active');
                    $('#li-installment').removeClass('active');
                    $('#payment_1').addClass('active');
                    $('#payment_2').removeClass('active');
                    $('#li-cash').show();
                    $('#li-installment').hide();
                    if(payment.note_ids_arr.length > 0) {
                        modal.find('#payment_selected_notes_id_value').val(payment.note_ids);
                    }

                    $('#payment_selected_details').html("");
                    var counter = 0;
                    var htmlPaymentNotes ='';
                    $.each(payment_notes_rows_details_selected, function (i, value) {
                        counter = counter + 1;
                        htmlPaymentNotes = '<div class="payment_notes_wrapper">';
                            htmlPaymentNotes += '<div style="border-top: 1px solid #ccc;padding-top:5px;"><b class="pull-left">NOTE&nbsp;'+ (counter) + '&nbsp; PROCEDURES</b> <span class="pull-right"><a href="#" class="btn btn-danger btn-xs btn-flat" data-rowId="'+i+'" onClick="removePaymentNote(this)"><i class="fa fa-times"></i> Remove</a></span></div>';
                            htmlPaymentNotes += value;
                        htmlPaymentNotes += '</div>';
                        $('#payment_selected_details').append(htmlPaymentNotes);
                    });
                    computeTotalProcedureAmount();

                    if(payment.payment_method){
                        var methodOption = new Option(payment.payment_method.name, payment.payment_method.id, true, true);
                        modal.find('#method_id').append(methodOption).trigger('change');
                        modal.find('#cash_payment_method').val(payment.payment_method.name);
                    }else{
                        if(response.payment_method){
                            var methodOption = new Option(response.payment_method.name, response.payment_method.id, true, true);
                            modal.find('#method_id').append(methodOption).trigger('change');
                        }
                    }
                    var method_name = payment.payment_method ? payment.payment_method.name : response.payment_method.name;
                    cashPaymentMethodOnChange(method_name);
                    modal.find('#payment_date').val(payment.payment_date_form);
                    modal.find('#amount').val(payment.amount);
                    modal.find('#remarks').val(payment.remarks);
                    if(method_name == 'Insurance' || method_name == 'insurance'){
                        var insuranceOption = new Option(payment.insurance.name, payment.insurance.id, true, true);
                        modal.find('#insurance_id').append(insuranceOption).trigger('change');
                    }
                }else{
                    $('#li-cash').removeClass('active');
                    $('#li-installment').addClass('active');
                    $('#payment_1').removeClass('active');
                    $('#payment_2').addClass('active');
                    $('#li-cash').hide();
                    $('#li-installment').show();
                    $('.initial-div').hide();
                    if(payment.note_ids_arr.length > 0) {
                        modal.find('#install_payment_selected_notes_id_value').val(payment.note_ids);
                    }

                    $('#payment_selected_details').html("");
                    var counter = 0;
                    var htmlPaymentNotes ='';
                    $.each(payment_notes_rows_details_selected, function (i, value) {
                        counter = counter + 1;
                        htmlPaymentNotes = '<div class="payment_notes_wrapper">';
                            htmlPaymentNotes += '<div style="border-top: 1px solid #ccc;padding-top:5px;"><b class="pull-left">NOTE&nbsp;'+ (counter) + '&nbsp; PROCEDURES</b> <span class="pull-right"><a href="#" class="btn btn-danger btn-xs btn-flat" data-rowId="'+i+'" onClick="removePaymentNote(this)"><i class="fa fa-times"></i> Remove</a></span></div>';
                            htmlPaymentNotes += value;
                        htmlPaymentNotes += '</div>';
                        $('#install_payment_selected_details').append(htmlPaymentNotes);
                    });
                    computeTotalProcedureAmount();

                    modal.find('#initial_payment_date').val(payment.payment_date_form);
                    modal.find('#initial_due_date').val(payment.due_date_form);
                    modal.find('#initial_amount').val(payment.amount);
                    modal.find('#initial_remarks').val(payment.remarks);
                    modal.find('#initial_payment_id').val(payment.hashid);
                    modal.find('#plan_name').val(payment.plan_name);

                    if(payment.payment_method){
                        var methodOption = new Option(payment.payment_method.name, payment.payment_method.id, true, true);
                        modal.find('#ins_method_id').append(methodOption).trigger('change');
                    }else{
                        if(response.payment_method){
                            var methodOption = new Option(response.payment_method.name, response.payment_method.id, true, true);
                            modal.find('#ins_method_id').append(methodOption).trigger('change');
                        }
                    }
                    // modal.find('#ins_payment_method').val(payment.method);

                    if(response.balance == 0){
                        $('#initial_amount').prop('readonly',true);
                    }else{
                        $('#initial_amount').prop('readonly',false);
                    }
                }
                if(payment.user.role.type_id != 2){
                    var user_payment = new Option(payment.user.fullname, payment.user.id, true, true);
                    modal.find('.payment_user_id').append(user_payment);
                }else{
                    var admin = new Option(admin.fullname, admin.id, true, true);
                    modal.find('.payment_user_id').append(admin);
                }

                modal.find('.loader').hide();
                modal.find('.form-content').show();
                modal.find('#payment-btn').removeAttr('disabled');
            })
            .fail(function() {
                modal.find('.loader').hide();
                modal.find('.form-content').show();
                modal.find('#payment-btn').removeAttr('disabled');
                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
            });
        }
    });

    $('#payment-modal').on('hidden.bs.modal', function(e){
        var modal = $(this);

        paymentForm.attr('action', '');
        paymentForm.attr('method', '');
        paymentForm.find('[name="_method"]').val('');

        installmentForm.attr('action', '');
        installmentForm.attr('method', '');
        installmentForm.find('[name="_method"]').val('');

        modal.find('#payment-form')[0].reset();
        modal.find('#installment-form')[0].reset();
        modal.find('#note_id').val('0');
        modal.find('#initial_note_id').val('0');
        modal.find('#initial_payment_id').val('');
        modal.find('#initial_p_remarks').val('');
        modal.find('#insurance_id').val(null).trigger('change');
        modal.find('#method_id').val(null).trigger('change');
        modal.find('#ins_method_id').val(null).trigger('change');
        modal.find('.form-group').removeClass('has-error has-success');
        modal.find('[id*="-error"]').remove();
        
        $('#li-cash').show();
        $('#li-installment').show();
        $('#insuranceField').hide();
        insPaymentMethodOnChange('');
    });


    $('form#installment-form').find('#initial_amount').on('wheel',function(e){ return false; });
    $('form#installment-form').find('#initial_down').on('wheel',function(e){ return false; });
    // $('#cash_payment_method').change(function(){
    //     var value = $(this).val();
    //     cashPaymentMethodOnChange(value);
    // });

    // $('#ins_payment_method').change(function(){
    //     var value = $(this).val();
    //     var payment_id = $('#initial_payment_id').val();
    //     if(payment_id == ''){
    //         insPaymentMethodOnChange(value);
    //     }
    // });

    $('#payment-form').find("#insurance_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/insurance/insurance-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    }).on('change.select2', function (e){
        $(this).valid();
    });

    $('#payment-form').find("#method_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/payment-method/payment-method-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    }).on('change.select2', function (e){
        $(this).valid();
        var value = $("#method_id option:selected").text();
        cashPaymentMethodOnChange(value);
    });

    $('#installment-form').find("#ins_method_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/payment-method/payment-method-select2?without_insurance=1',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    }).on('change.select2', function (e){
        $(this).valid();
        var value = $("#ins_method_id option:selected").text();
        var payment_id = $('#initial_payment_id').val();
        if(payment_id == ''){
            insPaymentMethodOnChange(value);
        }
    });

    $('form#payment-form').submit(function(e) {
        console.log("payment form");
        e.preventDefault();
        var form = $(this);
        var action = form.attr('action');
        var method = form.find('input[name="_method"]').val();
        if(form.valid()) {
            var amount = form.find('#amount').val();
            if(amount <= 0) {
                swal('Please fill total amount', '', 'warning');
                $('.btn-loading').button('reset');
                return false;
            }

            $.ajax({
                url: action,
                type: method,
                dataType: 'json',
                data: paymentForm.serialize(),
            })
            .done(function(response) {
                if(response.type == 'success'){
                    swal(response.message, '', 'success')
                    $('#payment-modal').modal('hide');
                    paymentTable.draw();
                    $('#dental-notes-table').DataTable().draw();
                }
                if(response.type == undefined){
                    $('#payment-modal').modal('hide');

                }
                $('.btn-loading').button('reset');
            });
        } else {
            setTimeout(function(){
                $('.btn-loading').button('reset');
            }, 500)
        }
    });

    installmentForm.find('#installment-btn').on('click', function(e) {
        console.log("installment form")
       /* e.preventDefault();
        e.stopImmediatePropagation();*/
        var form = installmentForm;
        var action = form.attr('action');
        var method = form.find('input[name="_method"]').val();

        if(form.valid()) {
            var formData = installmentForm.serialize();
            $.ajax({
                url: action,
                type: method,
                dataType: 'json',
                data: formData,
            })
            .done(function(response) {
                if(response.type == 'success'){
                    swal(response.message, '', 'success')
                    paymentInstallmentTable.draw();
                    $('#dental-notes-table').DataTable().draw();
                    $('#payment-modal').modal('hide');
                }
                if(response.type == undefined){
                    $('#payment-modal').modal('hide');
                }
                $('.btn-loading').button('reset');
            });
        } else {
            setTimeout(function(){
                $('.btn-loading').button('reset');
            }, 500)
        }
        return false;
    });

    $('.payment-pane').on('shown.bs.tab', function (e) {
        payment_notes_rows_selected = []; // Array holding selected row IDs
        payment_notes_rows_details_selected = {};
        var modal = $(this);

        $('#payment_selected_details').html("");
        $('#install_payment_selected_details').html("");
        $('#payment_selected_notes_id_value').val("");
        $('#install_payment_selected_notes_id_value').val("");
    })
});

function cashPaymentMethodOnChange(value)
{
    $('#cash_payment_method').val(value);
    if(value == 'Insurance'){
        $('#insuranceField').show();
    }else{
        $('#insuranceField').hide();
        $('#insurance_id').val(null).trigger('change');
    }
}

function insPaymentMethodOnChange(value)
{
    if(value != ''){
        $('.initial-div').show();
    }else{
        $('.initial-div').hide();
        $('#initial_down').val(null);
        $('#initial_p_remarks').val(null);
    }
}
</script><script type="text/javascript">
$(function() {
    $('#list-installment-modal').on('show.bs.modal', function(e){
        var button = $(e.relatedTarget);
        var datatable_url = button.data('datatable_url');
        var add_payment_action = button.data('add_payment_action');
        var payment_method = button.data('payment_method');
        var payment_method_id = button.data('payment_method_id');
        var modal = $(this);
        
        $('#add-installment-payment-btn').data('action', add_payment_action);
        $('#add-installment-payment-btn').data('payment_method', payment_method);
        $('#add-installment-payment-btn').data('payment_method_id', payment_method_id);

        installmentListTable = $('#installment-list-table').DataTable({
            processing: true,
            serverSide: true,
            "pagingType": "input",
            destroy: true,
            searching: false,
            paging: false,
            ajax: {
                url: datatable_url,
                method: 'POST'
            },
            columns: [
                {
                    width:'10px', searchable: false, orderable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }, className: "text-center"
                },
                { data: 'payment_date', name: 'payment_date', orderable: true, searchable: false},
                { data: 'payment_method', name: 'payment_method', orderable: false, searchable: false},
                { data: 'amount', name: 'amount', orderable: false, searchable: false},
                { data: 'updated_date', name: 'updated_at', orderable: true, searchable: false},
                { data: 'remarks', name: 'remarks', orderable: false, searchable: false, width:'100px'},
                { data: 'action', name: 'action', orderable: false, searchable: false, width:'40px', className: 'text-center'}
            ],
            fnDrawCallback: function ( oSettings ){
                var api = this.api()
                var json = api.ajax.json();
                var total_to_be_paid = json.total_to_be_paid;
                var total_balance = json.total_balance;
                var balance_amount = json.balance_amount;

                $('#total_to_be_paid').text(total_to_be_paid);
                $('#total_balance_amount').text(total_balance);
                $('#balance_amount').val(balance_amount);
                if(balance_amount == 0){
                    $('#add-installment-payment-btn').hide();
                }else{
                    $('#add-installment-payment-btn').show();
                }

                $('a#btn-installment-payment-delete').click(function(){
                    var action = $(this).data('action');
                    swal({
                        title: 'Are you sure?',
                        text: "You will not be able to recover this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        showLoaderOnConfirm: true,
                        preConfirm : function(){
                            return new Promise(function(){
                                $.ajax({
                                    type: "DELETE",
                                    url: action,
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.type == "success") {
                                            swal({
                                                title:  'Deleted!',
                                                text:   data.message,
                                                type:   'success'
                                            });
                                            installmentListTable.draw();
                                            paymentInstallmentTable.draw();
                                       }else{
                                            swal({
                                                title:  'Error!',
                                                text:   data.message,
                                                type:   'error'
                                            });
                                       }
                                    },
                                    error :function( jqXhr ) {
                                        swal(
                                          'Error!',
                                          'Something went wrong.',
                                          'error'
                                        );        
                                    }
                                });
                            });
                        },
                        allowOutsideClick: false
                    });
                });
            },
            "order": [[4, "desc"]],
        });
    });

    $('#list-installment-modal').on('hidden.bs.modal', function(e){
        var modal = $(this);
        $('#add-installment-payment-btn').data('action', '');
        $('#add-installment-payment-btn').data('payment_method', '');
        $('#add-installment-payment-btn').data('payment_method_id', '');
        $('#balance_amount').val('');
    });
});
</script><script type="text/javascript">
$(function() {
    var installmentPaymentForm = $('#installment-payment-form');
    $('#installment-modal').on('show.bs.modal', function(e){
        var button = $(e.relatedTarget);
        var action = button.data('action');
        var method = button.data('method');
        var amount = button.data('amount');
        var payment_method = button.data('payment_method');
        var payment_method_id = button.data('payment_method_id');
        var edit_url = button.data('edit-url');
        var modal = $(this);
        
        installmentPaymentForm.attr('action', action);
        installmentPaymentForm.attr('method', method);
        installmentPaymentForm.find('[name="_method"]').val(method);

        if(method == 'PUT'){
            modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Installment Payment');
        }

        if(method == 'POST'){
            modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Installment Payment');
        }

        if(payment_method){
            var methodOption = new Option(payment_method, payment_method_id, true, true);
            modal.find('#installment_method_id').append(methodOption).trigger('change');
            // modal.find('#installment_method').val(payment_method);
        }
        if(amount){
            modal.find('#balance_amount').val(amount);
        }
        if(edit_url != undefined && edit_url != ''){
            modal.find('.ins-loader').show();
            modal.find('.ins-form-content').hide();
            modal.find('#installment-payment-btn').attr('disabled', true);
            $.ajax({
                url: edit_url,
                type: 'GET',
            })
            .done(function(response){
                var installment = response.installment;
                var total = parseFloat(amount) + parseFloat(installment.amount);
                modal.find('#balance_amount').val(total);

                modal.find('#installment_date').val(installment.payment_date_form);
                modal.find('#installment_amount').val(installment.amount);
                modal.find('#installment_remarks').val(installment.remarks);
                // modal.find('#installment_method').val(installment.method);
                if(installment.payment_method){
                    var methodOption = new Option(installment.payment_method.name, installment.payment_method.id, true, true);
                    modal.find('#installment_method_id').append(methodOption).trigger('change');
                }else{
                    if(response.payment_method){
                        var methodOption = new Option(response.payment_method.name, response.payment_method.id, true, true);
                        modal.find('#installment_method_id').append(methodOption).trigger('change');
                    }
                }

                modal.find('.ins-loader').hide();
                modal.find('.ins-form-content').show();
                modal.find('#installment-payment-btn').removeAttr('disabled');
            })
            .fail(function() {
                modal.find('.ins-loader').hide();
                modal.find('.ins-form-content').show();
                modal.find('#installment-payment-btn').removeAttr('disabled');
                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
            });
        }

    });

    $('#installment-modal').on('hidden.bs.modal', function(e){
        var modal = $(this);

        installmentPaymentForm.attr('action', '');
        installmentPaymentForm.attr('method', '');
        installmentPaymentForm.find('[name="_method"]').val('');

        modal.find('#installment-payment-form')[0].reset();
        modal.find('#balance_amount').val('');
        modal.find('#installment_method_id').val(null).trigger('change');

        modal.find('.form-group').removeClass('has-error has-success');
        modal.find('[id*="-error"]').remove();
    });

    $('#installment-payment-form').find("#installment_method_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/payment-method/payment-method-select2?without_insurance=1',
            delay: 400,
            data: function (params) {
              return {
                name: params.term
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
    }).on('change.select2', function (e){
        $(this).valid();
        var value = $("#ins_method_id option:selected").text();
        var payment_id = $('#initial_payment_id').val();
        if(payment_id == ''){
            insPaymentMethodOnChange(value);
        }
    });

    installmentPaymentForm.submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var action = form.attr('action');
        var method = form.find('input[name="_method"]').val();
        var amount = $('[name="installment_amount"]').val();
        var balance_amount = $('[name="balance_amount"]').val();

        if(form.valid()) {
            if(parseFloat(amount) > parseFloat(balance_amount)){
                swal('Notice!', 'Payment amount exceeds the remaining balance.', 'error');
                setTimeout(function(){
                    $('.btn-loading').button('reset');
                }, 500)
            }else{
                $.ajax({
                    url: action,
                    type: method,
                    dataType: 'json',
                    data: installmentPaymentForm.serialize(),
                })
                .done(function(response) {
                    if(response.type == 'success'){
                        swal(response.message, '', 'success')
                        $('#installment-modal').modal('hide');
                        paymentInstallmentTable.draw();
                        $('#installment-list-table').DataTable().draw();
                        $('#payment-installment-table').DataTable().draw();
                        $('#note-payment-installment-table').DataTable().draw();
                    }
                    if(response.type == undefined){
                        $('#installment-modal').modal('hide');
                    }
                    $('.btn-loading').button('reset');
                });
            }
        } else {
            setTimeout(function(){
                $('.btn-loading').button('reset');
            }, 500)
        }
    });
});
</script><script type="text/javascript">
$(function() {
    var notePaymentTable = $('#note-payment-table-cash').DataTable();
    var notePaymentInstallmentTable = $('#note-payment-installment-table').DataTable();
    $('#note-payments-list-modal').on('show.bs.modal', function(e){
        var button = $(e.relatedTarget);
        var note_id = button.data('note_id');
        var payment_id = button.data('payment_id');
        var payment_type = button.data('payment_type');
        if(payment_type == 'installment') {
            $('#note-payment-tab a[href="#note_tab_2"]').tab('show');
        } else {
            $('#note-payment-tab a[href="#note_tab_1"]').tab('show');
        }
        notePaymentTable.destroy();
        notePaymentTable = $('#note-payment-table-cash').DataTable({
            processing: true,
            serverSide: true,
            "pagingType": "input",
            ajax: {
                url: "https://web.dentalclinicapp.com/clinic/patient/payment/full-payment-data/BD4Padp3Jr",
                method: 'POST',
                data: function(d) {
                    d.note_id = note_id;
                    d.payment_id = payment_id;
                }
            },
            columns: [
                {
                    width:'10px', searchable: false, orderable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }, className: "text-center"
                },
                { data: 'display_payment_date', name: 'payment_date', orderable: true, searchable: false, width:'90px',},
                { data: 'amount', name: 'amount', orderable: false, searchable: true, width:'100px',},
                { data: 'payment_method', name: 'method', orderable: false, searchable: true},
                { data: 'updated_date', name: 'updated_at', orderable: true, searchable: false},
                { data: 'remarks', name: 'remarks', orderable: false, searchable: true, width:'250px'},
                { data: 'action', name: 'action', orderable: false, searchable: false, width:'60px', className: 'text-center'}
            ],
            fnDrawCallback: function ( oSettings ) {
                var json = this.api().ajax.json();
                var total_payment = json.total['payment'];
                var total_balance = json.total['balance'];
                $('#note_total_payment').text(total_payment);
                $('#note_total_balance').text(total_balance);

                $('a#btn-payment-delete').click(function(){
                    var action = $(this).data('action');
                    swal({
                        title: 'Are you sure?',
                        text: "You will not be able to recover this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        showLoaderOnConfirm: true,
                        preConfirm : function(){
                            return new Promise(function(){
                                $.ajax({
                                    type: "DELETE",
                                    url: action,
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.type == "success") {
                                            swal({
                                                title:  'Deleted!',
                                                text:   data.message,
                                                type:   'success'
                                            });
                                            notePaymentTable.draw();
                                            $('#payment-table-cash').DataTable().draw();
                                       }else{
                                            swal({
                                                title:  'Error!',
                                                text:   data.message,
                                                type:   'error'
                                            });
                                       }
                                    },
                                    error :function( jqXhr ) {
                                        swal(
                                          'Error!',
                                          'Something went wrong.',
                                          'error'
                                        );        
                                    }
                                });
                            });
                        },
                        allowOutsideClick: false
                    });
                });
            },
            "order": [[4, "desc"]],
        });

        notePaymentInstallmentTable.destroy();
        notePaymentInstallmentTable = $('#note-payment-installment-table').DataTable({
            processing: true,
            serverSide: true,
            searching: false, 
            info: false,
            "lengthChange": false,
            ordering: false,
            ajax: {
                url:'https://web.dentalclinicapp.com/clinic/patient/payment/installment-data/BD4Padp3Jr',
                method: 'POST',
                data: function(d){
                    d.sort_by = $('#note_payment_sort').val();
                    d.order_by = $('#note_payment_order').val();
                    d.note_id = note_id;
                    d.payment_id = payment_id;
                }
            },
            columns: [
                {
                    width:'10px', searchable: false, orderable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }, className: "text-center"
                },
                { data: 'details', name: 'payment_date', orderable: true, searchable: true},
                { data: 'action', name: 'action', orderable: false, searchable: false, width:'80px', className: 'text-center'}
            ],
            fnDrawCallback: function ( oSettings ) {
                var json = this.api().ajax.json();
                if(json != undefined) {
                    var total_payment = json.total['payment'];
                    var total_balance = json.total['balance'];
                    if(total_balance == '0.00' && total_payment == '0.00') {
                        $('#dental-notes-table').DataTable().draw();
                        $('#note-payments-list-modal').modal('hide');
                    }
                    $('#note_total_payment').text(total_payment);
                    $('#note_total_balance').text(total_balance);
                }

                notePaymentInstallmentTable.$('a#btn-installment-delete').click(function(){
                    var action = $(this).data('action');
                    swal({
                        title: 'Are you sure?',
                        text: "You will not be able to recover this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        showLoaderOnConfirm: true,
                        preConfirm : function(){
                            return new Promise(function(){
                                $.ajax({
                                    type: "DELETE",
                                    url: action,
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.type == "success") {
                                            swal({
                                                title:  'Deleted!',
                                                text:   data.message,
                                                type:   'success'
                                            });
                                            $('#note-payment-installment-table').DataTable().draw();
                                            $('#payment-installment-table').DataTable().draw();
                                       }else{
                                            swal({
                                                title:  'Error!',
                                                text:   data.message,
                                                type:   'error'
                                            });
                                       }
                                    },
                                    error :function( jqXhr ) {
                                        swal(
                                          'Error!',
                                          'Something went wrong.',
                                          'error'
                                        );        
                                    }
                                });
                            });
                        },
                        allowOutsideClick: false
                    });
                });
            },
            "order": [[1, 'desc']],
        });
    });
});
</script>
<script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("form#prescription-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"prescription_date":{"laravelValidation":[["Required",[],"The prescription date field is required.",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("form#prescription-drug-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"generic_id":{"laravelValidation":[["Required",[],"Generic Name field is required.",true]]},"duration":{"laravelValidation":[["Required",[],"The duration field is required.",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("form#drug-generic-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"Generic name field is required.",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("form#drug-brand-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"Brand name field is required.",true]]}}            });
        });
    });
</script>

<script>
    jQuery(document).ready(function(){

        $("form#drug-dosage-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"Dosage form field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
	var $drugGenericModalForm = $('form#drug-generic-modal-form');
	var $drugBrandModalForm = $('form#drug-brand-modal-form');
	var $drugDosageModalForm = $('form#drug-dosage-modal-form');

	$(function(){
		$('#drug-generic-modal').on('show.bs.modal', function(e){
			var button = $(e.relatedTarget);
			var action = button.data('action');
			var method = button.data('method');

			var modal = $(this);

			$drugGenericModalForm.attr('action', action);
			$drugGenericModalForm.attr('method', method);
			$drugGenericModalForm.find('[name="_method"]').val(method);

			if(method == 'PUT'){
				modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Generic Name');
			}

			if(method == 'POST'){
				modal.find('.modal-title').html('<i class="fa fa-plus-square-o"></i> Add Generic Name');
			}			
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		});

		$('#drug-generic-modal').on('hidden.bs.modal', function(e){
			var modal = $(this);

			$drugGenericModalForm.attr('action', '');
			$drugGenericModalForm.attr('method', '');
			$drugGenericModalForm.find('[name="_method"]').val('');	
			modal.find('#generic_name').val('');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
			modalPrescriptionOpen();
		});

		$('#drug-brand-modal').on('show.bs.modal', function(e){
			var button = $(e.relatedTarget);

			var action = button.data('action');
			var method = button.data('method');
			var genericText = button.attr('data-generic-text');
			//var genericID = button.attr('data-generic-id');

			//var newOption = new Option(genericText, genericID, true, true);
			//$drugBrandModalForm.find("#generic_id").append(newOption).trigger('change');

			var modal = $(this);

			$drugBrandModalForm.attr('action', action);
			$drugBrandModalForm.attr('method', method);
			$drugBrandModalForm.find('[name="_method"]').val(method);

			if(method == 'PUT'){
				modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Brand Name');
			}

			if(method == 'POST'){
				modal.find('.modal-title').html('<i class="fa fa-plus-square-o"></i> Add Brand Name');
			}			
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();

			/*$drugBrandModalForm.find("#generic_id").select2({
		        placeholder:' - Select - ',
		        triggerChange: true,
		        allowClear: true,
		        dropdownParent: $drugBrandModalForm,
		        ajax: {
		            url: 'https://web.dentalclinicapp.com/clinic/settings/drug/generic-list-select2',
		            delay: 400,
		            data: function (params) {
		              return {
		                name: params.term
		              };
		            },
		            processResults: function (data, page) {
		              return {
		                results: data
		              };
		            }
		        }
			}).on('change.select2', function (e) {
				$(this).valid();
			});*/
		});

		$('#drug-brand-modal').on('hidden.bs.modal', function(e){
			var modal = $(this);

			$drugBrandModalForm.attr('action', '');
			$drugBrandModalForm.attr('method', '');
			$drugBrandModalForm.find('[name="_method"]').val('');
			//$drugBrandModalForm.find('#generic_id').val(null).trigger('change');
			modal.find('#brand_name').val('');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();	
			modalPrescriptionOpen();
		});

		$('#drug-dosage-modal').on('show.bs.modal', function(e){
			var button = $(e.relatedTarget);
			var action = button.data('action');
			var method = button.data('method');

			var modal = $(this);

			$drugDosageModalForm.attr('action', action);
			$drugDosageModalForm.attr('method', method);
			$drugDosageModalForm.find('[name="_method"]').val(method);

			if(method == 'PUT'){
				modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Dosage Form');
			}

			if(method == 'POST'){
				modal.find('.modal-title').html('<i class="fa fa-plus-square-o"></i> Add Dosage Form');
			}			
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		});

		$('#drug-dosage-modal').on('hidden.bs.modal', function(e){
			var modal = $(this);

			$drugGenericModalForm.attr('action', '');
			$drugGenericModalForm.attr('method', '');
			$drugGenericModalForm.find('[name="_method"]').val('');	
			modal.find('#dosage_name').val('');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
			modalPrescriptionOpen();
		});

		$drugGenericModalForm.submit(function(e) {
			e.preventDefault();
			var form = $(this);
		    var action = $(this).attr('action');
            var method = $(this).find('input[name="_method"]').val();

		    if(form.valid()) {
		    	$.ajax({
                    url: action,
                    type: method,
                    dataType: 'json',
                    data: form.serialize(),
                })
                .done(function(response) {
                    if(response.type == 'success'){
                    	var newOption = new Option(response.data.name, response.data.id, true, true);
						$drugBrandModalForm.find("#generic_id").append(newOption).trigger('change');
						$prescriptionDrugModalForm.find("#generic_id").append(newOption).trigger('change');
						$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', response.data.id);
						$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', response.data.name);
                        
						brandSelect2(response.data.id);
                        $('#drug-generic-modal').modal('hide');
                        swal(response.message, '', 'success')
                    }else{
                    	swal(response.message, '', 'error')
                    }
                    $('.btn-loading').button('reset');
                });
		    } else {
		    	setTimeout(function(){
		    		$('.btn-loading').button('reset');
		    	}, 500)
		    }
		});

		$drugBrandModalForm.submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var action = $(this).attr('action');
            var method = $(this).find('input[name="_method"]').val();
		    if(form.valid()) {
		    	$.ajax({
                    url: action,
                    type: method,
                    dataType: 'json',
                    data: form.serialize(),
                })
                .done(function(response) {
                    if(response.type == 'success'){
                    	var newOption = new Option(response.data.name, response.data.id, true, true);
						$prescriptionDrugModalForm.find("#brand_id").append(newOption).trigger('change');
						//var genericOption = new Option(response.generic.name, response.generic.id, true, true);
	            		//$prescriptionDrugModalForm.find('#generic_id').append(genericOption).trigger('change');

	            		//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', response.generic.id);
						//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', response.generic.name);

						//brandSelect2(response.generic.id);
                        $('#drug-brand-modal').modal('hide');
                        swal(response.message, '', 'success')
                    }else{
                    	swal(response.message, '', 'error')
                    }
                    $('.btn-loading').button('reset');
                });
		    } else {
		    	setTimeout(function(){
		    		$('.btn-loading').button('reset');
		    	}, 500)
		    }
		});

		$drugDosageModalForm.submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var action = $(this).attr('action');
            var method = $(this).find('input[name="_method"]').val();

		    if(form.valid()) {
		    	$.ajax({
                    url: action,
                    type: method,
                    dataType: 'json',
                    data: form.serialize(),
                })
                .done(function(response) {
                    if(response.type == 'success'){
                    	var newOption = new Option(response.data.name, response.data.id, true, true);
						$prescriptionDrugModalForm.find("#dosage_id").append(newOption).trigger('change');
                        $('#drug-dosage-modal').modal('hide');
                        swal(response.message, '', 'success')
                    }else{
                    	swal(response.message, '', 'error')
                    }
                    $('.btn-loading').button('reset');
                });
		    } else {
		    	setTimeout(function(){
		    		$('.btn-loading').button('reset');
		    	}, 500)
		    }
		});
	});
</script><script type="text/javascript">
	$.validator.setDefaults({ ignore: '' });
	$(function() {
		drugs_added = [];

		prescriptionTable = $('#prescription-table').DataTable({
			processing: true,
		    serverSide: true,
		    "dom": '<"top"f>rt<"bottom"p>',
		    "deferLoading":0,
		    ajax: {
		        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription-data',
		        method: 'POST',
		    },
		    columns: [
		    	{data: 'DT_Row_Index', orderable: false, searchable: false,width:'10px', className : 'text-center'},
		    	{ data: 'date', name: 'prescription_date', orderable: true, searchable: false, width:'120px'},
		    	{ data: 'instruction', name: 'instruction', orderable: false, searchable: true},
		    	{ data: 'updated_date', name: 'updated_at', orderable: true, searchable: false, width:'150px'},
		    	{ data: 'action', name: 'action', orderable: false, searchable: false, width:'80px', className : 'text-center'},
		    ],
		    fnDrawCallback: function ( oSettings ) {
		    	$('a#btn-prescription-delete').click(function(){
		    		var action = $(this).data('action');
					swal({
					    title: 'Are you sure?',
					    text: "You will not be able to recover this Prescription!",
					    type: 'warning',
					    showCancelButton: true,
					    confirmButtonColor: '#3085d6',
					    cancelButtonColor: '#d33',
					    confirmButtonText: 'Yes, delete it!',
					    showLoaderOnConfirm: true,
					    preConfirm : function(){
					    	return new Promise(function(){
						        $.ajax({
						            type: "DELETE",
						            url: action,
						            dataType: 'json',
						            success: function(response) {
						                if(response.type == "success") {
						                    swal({
					                    		title: 	'Deleted!',
					                    	  	text: 	response.message,
					                    	 	type: 	'success'
						                    });
						                    prescriptionTable.draw();
						                    $('.prescription-count').html(response.count);
						               }
						            },
						            error :function( jqXhr ) {
						                swal(
					                      'Error!',
					                      'Something went wrong.',
					                      'error'
					                    );        
						            }
						        });
					    	});
					    },
					    allowOutsideClick: false
					});
		    	});
		    },
		    "order": [[3, 'desc']],
		});

		drugDescTable = $('#drug-desc-table').DataTable({
			processing: true,
		    serverSide: true,
		    searching: false,
		    info: false,
		    lengthChange: false,
		    destroy: true,
		    paging:false,
		    "deferLoading":0,
		    ajax: {
		        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/prescription-drug-data',
		        method: 'POST',
		        data: function(d){
		        	d.ids = $('#drug_description').val();
		        	d.prescription_id = $('#prescription_id_value').val();
		        }
		    },
		    columns: [
		    	{ data: 'description', name: 'description', orderable: false, searchable: false, width:'60%', className : 'text-left'},
		    	{ data: 'action', name: 'action', orderable: false, searchable: false, width:'50px', className : 'text-center'},
		    ],
		    fnDrawCallback: function ( oSettings ) {
		    	$('a#btn-drug-desc-delete').click(function(){
		    		var action = $(this).data('action');
					swal({
					    title: 'Are you sure?',
					    text: "You will not be able to recover this Drug!",
					    type: 'warning',
					    showCancelButton: true,
					    confirmButtonColor: '#3085d6',
					    cancelButtonColor: '#d33',
					    confirmButtonText: 'Yes, delete it!',
					    showLoaderOnConfirm: true,
					    preConfirm : function(){
					    	return new Promise(function(){
						        $.ajax({
						            type: "DELETE",
						            url: action,
						            dataType: 'json',
						            success: function(data) {
						                if(data.type == "success") {
						                    swal({
					                    		title: 	'Deleted!',
					                    	  	text: 	data.message,
					                    	 	type: 	'success'
						                    });

						                    if($('#prescription_id_value').val() != ''){
					                    		$('#drug_update').val(1);
					                    	}

						                    var index = drugs_added.indexOf(data.data.id);
											if (index > -1) {
												drugs_added.splice(index, 1);
											}
											$('#drug_description').val(drugs_added);
											drugDescList();
						                    drugDescTable.draw();
						                    prescriptionTable.draw();
						               }
						            },
						            error :function( jqXhr ) {
						                swal(
					                      'Error!',
					                      'Something went wrong.',
					                      'error'
					                    );        
						            }
						        });
					    	});
					    },
					    allowOutsideClick: false
					});
		    	});
		    },
		    "order": [],
		});

		$('#prescription-form').submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var action = form.attr('action');
			var method = form.find('input[name="_method"]').val();
			var drug_desc = $('#drug_description').val();
		    if(form.valid()){
		    	if(drug_desc){
		    		$.ajax({
	                    url: action,
	                    type: method,
	                    dataType: 'json',
	                    data: form.serialize(),
	                })
	                .done(function(response) {
	                    if(response.type == 'success'){
	                    	swal({ 
								title: response.message,
					            text: "Do you want to print this prescription?",
					            type: "success",
					            showCancelButton: true,
						        confirmButtonColor: '#3085d6',
						        cancelButtonColor: '#d33',
						        confirmButtonText: 'Yes',
						        cancelButtonText: 'No',
					            allowOutsideClick: false
							}).then(okay => {
								if(okay.value){
									var print_url = response.print_url;
									if(print_url){
										window.open(print_url, '_blank');
									}
								}
							});
							$('#drug_update').val('');
							$('.prescription-count').html(response.count);
	                    	$('#prescription-modal').modal('hide');
						    prescriptionTable.draw();
	                    }
	                    if(response.type == undefined){
							$('#prescription-modal').modal('hide');
						}
						$('.btn-loading').button('reset');
	                });
		    	}else{
		    		swal('Drug Description is required.', '', 'error')
		    	}
		    }
	    	setTimeout(function(){
	    		$('.btn-loading').button('reset');
	    	}, 500)
		});

		$('#prescription-drug-form').submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var action = form.attr('action');
			var method = form.find('input[name="_method"]').val();
			
		    if(form.valid()) {
		    	$.ajax({
                    url: action,
                    type: method,
                    dataType: 'json',
                    data: form.serialize(),
                })
                .done(function(response) {
                    if(response.type == 'success'){
                    	if(response.method == 'add'){
                    		drugs_added.push(response.data.id);
                    		$('#drug_description').val(drugs_added);
                    		drugDescList();
                    	}
                    	if($('#prescription_id_value').val() != ''){
                    		$('#drug_update').val(1);
                    	}
                    	swal(response.message, '', 'success')
                    	$('#prescription-drug-modal').modal('hide');
					    drugDescTable.draw();
                    }
                    if(response.type == undefined){
						$('#prescription-drug-modal').modal('hide');
					}
					$('.btn-loading').button('reset');
                });
		    } else {
		    	setTimeout(function(){
		    		$('.btn-loading').button('reset');
		    	}, 500)
		    }
		});
	});

	function drugDescList(){
		var drug_desc = $('#drug_description').val();
		if(drug_desc != ''){
			$('#instruction_input').show();
			$('.no_drug_details').hide();
			$('.with_drug_details').show();
		}else{
			$('#instruction_input').hide();
			$('#instruction').val('');
			$('.no_drug_details').show();
			$('.with_drug_details').hide();
		}
	}

	function modalPrescriptionOpen()
	{
		var pres = $('#prescription-modal').is(':visible');
		if(pres == true){
			$("body").addClass("modal-open");
		}
	}
</script><script type="text/javascript">
	var $prescriptionModalForm = $('#prescription-form');
	var $prescriptionDrugModalForm = $('#prescription-drug-form');
	var body = $('body');
	var format = "mm/dd/yyyy";
	var dateToday = moment(new Date()).format(format.toUpperCase());

	$prescriptionModalForm.find("#prescription_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});
	$prescriptionModalForm.find("#prescription_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    dateFormat: body.data('datepicker-format'),
	    onSelect: function(dateText) {
		    $prescriptionModalForm.find('#prescription_date').valid();
		}
	});
	$(function(){
		$('#prescription-modal').on('show.bs.modal', function(e){
			var button = $(e.relatedTarget);
			var action = button.data('action');
			var method = button.data('method');
			var edit_url = button.data('edit-url');
			var modal = $(this);
			$prescriptionModalForm.attr('action', action);
			$prescriptionModalForm.attr('method', method);
			$prescriptionModalForm.find('[name="_method"]').val(method);

			if(method == 'PUT'){
				// var date = button.data('date');
				// $prescriptionModalForm.find('#prescription_date').val(date);
				modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Prescription');
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}

			if(method == 'POST'){
				modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Prescription');
				modal.find('#prescription_date').val(dateToday);
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}
			if(edit_url != undefined && edit_url != ''){
				modal.find('.loader').show();
		        modal.find('.form-content').hide();
		        modal.find('#btn_save_prescripton').attr('disabled', true);
				$.ajax({
	                url: edit_url,
	                type: 'GET',
	            })
	            .done(function(response){
	            	modal.find('#prescription_id_value').val(response.id);
					modal.find('#prescription_date').val(response.prescription_date_form);
					modal.find('.add-drug-btn').attr('data-prescription-id', response.id);
					$.each(response.medicines, function(key, med){
						drugs_added.push(med.id);
                    });
					modal.find('#drug_description').val(drugs_added);
					modal.find('#instruction').val(response.instruction);
					drugDescList();
					drugDescTable.draw();
					modal.find('.loader').hide();
			        modal.find('.form-content').show();
			        modal.find('#btn_save_prescripton').removeAttr('disabled');
	            })
	            .fail(function() {
	            	modal.find('.loader').hide();
			        modal.find('.form-content').show();
			        modal.find('#btn_save_prescripton').removeAttr('disabled');
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}else{
				modal.find('#prescription_id_value').val('');
				drugDescList();
			}
		});

		$('#prescription-modal').on('hidden.bs.modal', function(e){
			var modal = $(this);

			// if(modal.find('#drug_description').val() != '' || modal.find('#drug_update').val() != ''){
			// 	$.ajax({
	  //               url: 'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/on-close',
	  //               type: 'GET',
	  //               dataType: 'json',
	  //               data: $prescriptionModalForm.serialize(),
	  //           })
	  //           .done(function(response) {
	  //           	if(response.type == 'success'){
	  //           	}
	  //           })
	  //           .fail(function() {
	  //           	console.log('Something went wrong. Please reload this page and try again.');
	  //           });
			// }
            $prescriptionDrugModalForm.attr('action', '');
			$prescriptionDrugModalForm.attr('method', '');
			$prescriptionDrugModalForm.find('[name="_method"]').val('');
			modal.find('.add-drug-btn').attr('data-prescription-id', '');
            drugs_added = [];
			modal.find('#instruction').val('');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
            modal.find('#drug_description').val('');
            modal.find('#prescription_id_value').val('');
            modal.find('#drug_update').val('');
            drugDescTable.draw();
		});

		$('#prescription-drug-modal').on('show.bs.modal', function(e){
			var button = $(e.relatedTarget);
			var action = button.data('action');
			var method = button.data('method');
			var modal = $(this);
			var edit_url = button.data('edit-url');
			var prescription_id = button.attr('data-prescription-id');

			$prescriptionDrugModalForm.attr('action', action);
			$prescriptionDrugModalForm.attr('method', method);
			$prescriptionDrugModalForm.find('[name="_method"]').val(method);

			if(method == 'PUT'){
				modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Drug Prescription');
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}

			if(method == 'POST') {
				modal.find('#prescription_id').val(prescription_id);
				modal.find('.modal-title').html('<i class="fa fa-plus-square-o"></i> Add Drug Description');
				modal.find('.form-group').removeClass('has-error has-success');
				modal.find('[id*="-error"]').remove();
			}

			if(edit_url != undefined && edit_url != ''){
				modal.find('.loader').show();
		        modal.find('.form-content').hide();
		        modal.find('#btn_save_prescripton_drug').attr('disabled', true);
				$.ajax({
	                url: edit_url,
	                type: 'GET',
	            })
	            .done(function(response) {
	            	var genericOption = new Option(response.generic.name, response.generic_id, true, true);
	            	$prescriptionDrugModalForm.find('#generic_id').append(genericOption).trigger('change');
	            	if(response.brand_id != 0){
	            		var brandOption = new Option(response.brand.name, response.brand_id, true, true);
	            		$prescriptionDrugModalForm.find('#brand_id').append(brandOption).trigger('change');
	            	}
	            	if(response.dosage_id != 0){
	            		var dosageOption = new Option(response.dosages.name, response.dosage_id, true, true);
	            		$prescriptionDrugModalForm.find('#dosage_id').append(dosageOption).trigger('change');
	            	}
	            	brandSelect2(response.generic_id);
					$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', response.generic_id);
					$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', response.generic.name);
					modal.find('#quantity').val(response.quantity);
					modal.find('#dosage').val(response.dosage);
					modal.find('#duration').val(response.duration);
					modal.find('#prescription_id').val(prescription_id);

					modal.find('.loader').hide();
			        modal.find('.form-content').show();
			        modal.find('#btn_save_prescripton_drug').removeAttr('disabled');
	            })
	            .fail(function() {
	            	modal.find('.loader').hide();
			        modal.find('.form-content').show();
			        modal.find('#btn_save_prescripton_drug').removeAttr('disabled');
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}

			$prescriptionDrugModalForm.find("#generic_id").select2({
		        placeholder:' - Select - ',
		        triggerChange: true,
		        allowClear: true,
		        dropdownParent: $prescriptionDrugModalForm,
		        ajax: {
		            url: 'https://web.dentalclinicapp.com/clinic/settings/drug/generic-list-select2',
		            delay: 400,
		            data: function (params) {
		              return {
		                name: params.term
		              };
		            },
		            processResults: function (data, page) {
		              return {
		                results: data
		              };
		            }
		        }
			}).on('change.select2', function (e) {
				$(this).valid();
			}).on('select2:select', function(e) {
				var selected = e.params.data;
				//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', selected.id);
				//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', selected.text);
				//$prescriptionDrugModalForm.find('#brand_id').val(null).trigger('change');
				//brandSelect2(selected.id);
			}).on('select2:unselect', function(e) {
				//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', "");
				//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', "");
				//$prescriptionDrugModalForm.find('#brand_id').val(null).trigger('change');
				//brandSelect2('');
			});

			brandSelect2('');

			$prescriptionDrugModalForm.find("#dosage_id").select2({
		        placeholder:' - Select - ',
		        triggerChange: true,
		        allowClear: true,
		        dropdownParent: $prescriptionDrugModalForm,
		        ajax: {
		            url: 'https://web.dentalclinicapp.com/clinic/settings/drug/dosage-list-select2',
		            delay: 400,
		            data: function (params) {
		                
		              return {
		                name: params.term
		              };
		            },
		            processResults: function (data, page) {

		              return {
		                results: data
		              };
		            }
		        }
			}).on('change.select2', function (e) {
				$(this).valid();
			});
		});

		$('#prescription-drug-modal').on('hidden.bs.modal', function(e){
			var modal = $(this);

			$prescriptionDrugModalForm.attr('action', '');
			$prescriptionDrugModalForm.attr('method', '');
			$prescriptionDrugModalForm.find('[name="_method"]').val('');
			$prescriptionDrugModalForm.find('#generic_id').val(null).trigger('change');
			$prescriptionDrugModalForm.find('#brand_id').val(null).trigger('change');
			$prescriptionDrugModalForm.find('#dosage_id').val(null).trigger('change');
			$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', "");
			$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', "");
			modal.find('#quantity').val('');
			modal.find('#dosage').val('');
			modal.find('#duration').val('');
			modal.find('#prescription_id').val('');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
			modalPrescriptionOpen();
		});
	});
function brandSelect2(generic_id)
{
	$prescriptionDrugModalForm.find("#brand_id").select2({
        placeholder:' - Select - ',
        triggerChange: true,
        allowClear: true,
        dropdownParent: $prescriptionDrugModalForm,
        ajax: {
            url: 'https://web.dentalclinicapp.com/clinic/settings/drug/brand-list-select2',
            delay: 400,
            data: function (params) {
              return {
                name: params.term,
                generic_id: generic_id
              };
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            }
        }
	}).on('change.select2', function (e) {
		$(this).valid();
	}).on('select2:select', function(e) {
		var selected = e.params.data;
		//var genericOption = new Option(selected.generic.name, selected.generic_id, true, true);
        //$prescriptionDrugModalForm.find('#generic_id').append(genericOption).trigger('change');

        //$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-id', selected.generic_id);
		//$prescriptionDrugModalForm.find('.brand-btn').attr('data-generic-text', selected.generic.name);
	}).on('select2:unselect', function(e) {
		//
	});
}
</script><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("form#procedure-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"Procedure name field is required.",true]]},"min_amount":{"laravelValidation":[["Required",[],"Amount field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var procedureForm = $('#procedure-modal-form');
	$('#procedure-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var procedure_name = button.data("procedure-name");
		var min_amount = button.data("min_amount");
		var modal = $(this);

		procedureForm.attr('action', action);
		procedureForm.attr('method', method);
		procedureForm.find('[name="_method"]').val(method);

		if(method == 'PUT'){
			modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Procedure');
			modal.find('#procedure_name').val(procedure_name);
			modal.find('#min_amount').val(min_amount);
		}

		if(method == 'POST'){
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Procedure');
		}			
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	$('#procedure-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		procedureForm.attr('action', '');
		procedureForm.attr('method', '');
		procedureForm.find('[name="_method"]').val('');	
		modal.find('#procedure_name').val('');
		modal.find('#min_amount').val('');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	procedureForm.submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = $(this).attr('action');
        var method = $(this).find('input[name="_method"]').val();
	    if(form.valid()){
	    	$.ajax({
                url: action,
                type: method,
                dataType: 'json',
                data: form.serialize(),
            })
            .done(function(response) {
                if(response.type == 'success'){
                	if (typeof procedureTable === 'undefined') {
					    var newOption = new Option(response.data.name, response.data.id, true, true);
						$('#dental-notes-modal').find("#procedure_id").append(newOption).trigger('change');
					}else{
						procedureTable.draw();
					}
                    $('#procedure-modal').modal('hide');
                    swal(response.message, '', 'success')
                    $('.btn-loading').button('reset');
                }else if(response.type == 'exists'){
                	swal(response.message, '', 'error')
                    $('.btn-loading').button('reset');
                }else{
                	$('#procedure-modal').modal('hide');
                	$('.btn-loading').button('reset');
                }
            });
	    }
	    setTimeout(function(){
    		$('.btn-loading').button('reset');
    	}, 500)
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.min.js"></script>
<script>
    jQuery(document).ready(function(){

        $("form#insurance-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"The insurance name field is required.",true]]},"email":{"laravelValidation":[["Email",[],"The email must be a valid email address.",false]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var insuranceForm = $('#insurance-modal-form');
	$('#insurance-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var insurance_name = button.data("insurance-name");
		var email = button.data('email');
		var contact_number = button.data('contact');
		var address = button.data('address');
		var modal = $(this);

		insuranceForm.attr('action', action);
		insuranceForm.attr('method', method);
		insuranceForm.find('[name="_method"]').val(method);

		if(method == 'PUT'){
			modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Insurance');
			modal.find('#insurance_name').val(insurance_name);
			modal.find('#email').val(email);
			modal.find('#contact_number').val(contact_number);
			modal.find('#address').val(address);
		}

		if(method == 'POST'){
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Insurance');
		}			
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	$('#insurance-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		insuranceForm.attr('action', '');
		insuranceForm.attr('method', '');
		insuranceForm.find('[name="_method"]').val('');	
		modal.find('#insurance_name').val('');
		modal.find('#email').val('');
		modal.find('#contact_number').val('');
		modal.find('#address').val('');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	insuranceForm.submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = $(this).attr('action');
        var method = $(this).find('input[name="_method"]').val();
	    if(form.valid()){
	    	$.ajax({
                url: action,
                type: method,
                dataType: 'json',
                data: form.serialize(),
            })
            .done(function(response) {
                if(response.type == 'success'){
                	if (typeof insuranceTable === 'undefined') {
					    var newOption = new Option(response.data.name, response.data.id, true, true);
						$('#payment-modal').find("#insurance_id").append(newOption).trigger('change');
					}else{
						insuranceTable.draw();
					}
                    $('#insurance-modal').modal('hide');
                    swal(response.message, '', 'success')
                    $('.btn-loading').button('reset');
                }else if(response.type == 'exists'){
                	swal(response.message, '', 'error')
                    $('.btn-loading').button('reset');
                }else{
                	$('#insurance-modal').modal('hide');
                	$('.btn-loading').button('reset');
                }
            });
	    }
	    setTimeout(function(){
    		$('.btn-loading').button('reset');
    	}, 500)
	});
});
</script><script type="text/javascript">
$(function(){
	$('.pdf_option').iCheck({
	    checkboxClass: 'icheckbox_square-blue',
	    radioClass: 'iradio_square-blue',
	    increaseArea: '0' // optional
	});

	$('#download-pdf-modal').on('show.bs.modal', function(e){
		var modal = $(this);
		
		modal.find('.checked').prop('checked',true).iCheck('update');
		modal.find('.not_checked').prop('checked',false).iCheck('update');

		notes_rows_selected = [];
		modal.find('#selected_notes_id_value').val('all');
		$('#selected_notes_pdf').text('All notes selected.');
		$('#select_all_notes').prop('checked',false).iCheck('update');
		$('.select-dental-notes').prop('checked',false).iCheck('update');

		payments_rows_selected = [];
		modal.find('#selected_payments_id_value').val('all');
		$('#selected_payments_pdf').text('All payments selected.');
		$('#select_all_payments').prop('checked',false).iCheck('update');
		$('.select-payments').prop('checked',false).iCheck('update');
	});

	$('button#download-pdf-btn').on('click', function() {
        var btn = $(this);
        btn.button('loading');

        setTimeout(function(){
        	$('#download-pdf-modal').modal('hide');
            btn.button('reset');
        }, 1000);

       return true;
    });
});
</script><script type="text/javascript">
$(function(){
	$('#select_all_notes').iCheck({
		checkboxClass: 'icheckbox_square-blue',
	    radioClass: 'iradio_square-blue',
	    increaseArea: '0'
    });

	notes_rows_selected = []; // Array holding selected row IDs
	var selectNotesForm = $('form#select-notes-form');
	var selectNotesTable = $('#select-notes-table').DataTable({
		processing: true,
	    serverSide: true,
	    searching: false, 
	    info: false,
	    paging: false,
	    ordering: false,
	    destroy: true,
        deferLoading:0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/select-dental-notes',
	        method: 'POST',
	    },
	    columns: [
	    	{ data: 'checkmark', name:'id',orderable: false, searchable:false,  width:'30px', className:'td_note_checkbox'},
	    	{ data: 'details', name: 'updated_at', orderable: false, searchable: true},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('.select-dental-notes').iCheck({
				checkboxClass: 'icheckbox_square-blue',
			    radioClass: 'iradio_square-blue',
			    increaseArea: '0'
		    });

		    var info = this.api().page.info();
	    	$('#notes_data_total').val(info.recordsDisplay);
	    },
	    rowCallback: function(row, data, dataIndex){
            var rowId = data['id']; // Get row ID
            var selected_notes_id_value = $('#selected_notes_id_value').val();

            if(selected_notes_id_value == 'all'){
            	notes_rows_selected.push(rowId);
            }
            if($.inArray(rowId, notes_rows_selected) !== -1){ // If row ID is in the list of selected row IDs
                $(row).find('input[class="select-dental-notes"]').prop('checked', true);
                $(row).addClass('selected');
            }
        },
	    "order": [[1, 'desc']],
	});

	// Handle click on checkbox
    $('#select-notes-table tbody').on('ifChanged', 'input.select-dental-notes', function(e){
        var $row = $(this).closest('tr');
        var data = selectNotesTable.row($row).data(); // Get row data
        var rowId = data['id']; // Get row ID
        var index = $.inArray(rowId, notes_rows_selected); // Determine whether row ID is in the list of selected row IDs

        if(this.checked && index === -1){ // If checkbox is checked and row ID is not in list of selected row IDs
            notes_rows_selected.push(rowId);
            $(selectNotesForm).append( $('<input>').attr('type', 'hidden').attr('name', 'select-dental-notes[]').attr('class', 'row'+rowId).val(rowId));
        }else if(!this.checked && index !== -1){ // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
            notes_rows_selected.splice(index, 1);
            $('input[type=hidden][class=row'+rowId+']', selectNotesForm).remove();
        }

        if(this.checked){
            $row.addClass('selected');
        }else{
            $row.removeClass('selected');
        }

        var checkAll = $('thead input[id="select_all_notes"]');
        var checkboxes = $('tbody input.select-dental-notes');
        if(checkboxes.filter(':checked').length == checkboxes.length){
            checkAll.prop('checked', 'checked');
        }else{
            checkAll.removeProp('checked');
            checkAll.prop('checked', false);
        }
        checkAll.iCheck('update');
        e.stopPropagation();
    });

   // Handle click on "Select all" control
    $('#select-notes-table thead', selectNotesTable.table().container()).on('ifChanged', 'input[id="select_all_notes"]', function(e){
        if(this.checked){
            $('#select-notes-table tbody input[class="select-dental-notes"]:not(:checked)').iCheck('check');
        }else{
            $('#select-notes-table tbody input[class="select-dental-notes"]:checked').iCheck('uncheck');
        }
        e.stopPropagation();
    });

    // Handle table draw event
    selectNotesTable.on('draw', function(){
        var checkAll = $('thead input[id="select_all_notes"]');
        var checkboxes = $('tbody input.select-dental-notes');
        var selected_notes_id_value = $('#selected_notes_id_value').val();

        if(checkboxes.length != 0){
            if(selected_notes_id_value == 'all' || checkboxes.filter(':checked').length == checkboxes.length){
                checkAll.prop('checked', 'checked');
            }else{
                checkAll.removeProp('checked');
                checkAll.prop('checked', false);
            }
            checkAll.prop('disabled', false);
            checkAll.iCheck('update');
        }else{
            checkAll.removeProp('checked');
            checkAll.prop('disabled', true);
        }
    });

	$('#select-notes-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		var download_pdf = $('#download-pdf-modal').is(':visible');
		if(download_pdf == true){
			$("body").addClass("modal-open");
		}
	});

	$('#select-notes-modal').on('show.bs.modal', function(e){
		var modal = $(this);
		var selected_notes_id_value = $('#selected_notes_id_value').val();
		if(selected_notes_id_value != 'all'){
			notes_rows_selected = selected_notes_id_value.split(",");
		}else if(selected_notes_id_value == 'all'){
			notes_rows_selected = [];
		}
		selectNotesTable.draw();
	});

	$('button#select-notes-btn').on('click', function() {
        var btn = $(this);
        btn.button('loading');
        var total = $('#notes_data_total').val();

        if(notes_rows_selected == "") {
            swal('Please select Dental Notes.', '', 'error').catch(swal.noop);
            setTimeout(function(){
	            btn.button('reset');
	        }, 500);
            return false;
        }

        setTimeout(function(){
        	if(total == notes_rows_selected.length){
        		$('#selected_notes_pdf').text('All notes selected.');
        		$('#selected_notes_id_value').val('all');
        	}else{
        		$('#selected_notes_pdf').text(notes_rows_selected.length+' note(s) selected.');
        		$('#selected_notes_id_value').val(notes_rows_selected);
        	}
        	$('#select-notes-modal').modal('hide');
            btn.button('reset');
        }, 1000);

       return false;
    });
});
</script><script type="text/javascript">
$(function(){
	$('#select_all_payments').iCheck({
		checkboxClass: 'icheckbox_square-blue',
	    radioClass: 'iradio_square-blue',
	    increaseArea: '0'
    });

	payments_rows_selected = []; // Array holding selected row IDs
	var selectPaymentsForm = $('form#select-payments-form');
	var selectPaymentsTable = $('#select-payments-table').DataTable({
		processing: true,
	    serverSide: true,
	    searching: false, 
	    info: false,
	    paging: false,
	    ordering: false,
        deferLoading: 0,
	    destroy: true,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/select-payments',
	        method: 'POST',
	    },
	    columns: [
	    	{ data: 'checkmark', name:'id',orderable: false, searchable:false,  width:'30px', className:'td_payment_checkbox'},
	    	{ data: 'details', name: 'updated_at', orderable: false, searchable: true},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$('.select-payments').iCheck({
				checkboxClass: 'icheckbox_square-blue',
			    radioClass: 'iradio_square-blue',
			    increaseArea: '0'
		    });

		    var info = this.api().page.info();
	    	$('#payments_data_total').val(info.recordsDisplay);
	    },
	    rowCallback: function(row, data, dataIndex){
            var rowId = data['id']; // Get row ID
            var selected_payments_id_value = $('#selected_payments_id_value').val();

            if(selected_payments_id_value == 'all'){
            	payments_rows_selected.push(rowId);
            }
            if($.inArray(rowId, payments_rows_selected) !== -1){ // If row ID is in the list of selected row IDs
                $(row).find('input[class="select-payments"]').prop('checked', true);
                $(row).addClass('selected');
            }
        },
	    "order": [[1, 'desc']],
	});

	// Handle click on checkbox
    $('#select-payments-table tbody').on('ifChanged', 'input.select-payments', function(e){
        var $row = $(this).closest('tr');
        var data = selectPaymentsTable.row($row).data(); // Get row data
        var rowId = data['id']; // Get row ID
        var index = $.inArray(rowId, payments_rows_selected); // Determine whether row ID is in the list of selected row IDs

        if(this.checked && index === -1){ // If checkbox is checked and row ID is not in list of selected row IDs
            payments_rows_selected.push(rowId);
            $(selectPaymentsForm).append( $('<input>').attr('type', 'hidden').attr('name', 'select-payments[]').attr('class', 'row'+rowId).val(rowId));
        }else if(!this.checked && index !== -1){ // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
            payments_rows_selected.splice(index, 1);
            $('input[type=hidden][class=row'+rowId+']', selectPaymentsForm).remove();
        }

        if(this.checked){
            $row.addClass('selected');
        }else{
            $row.removeClass('selected');
        }

        var checkAll = $('thead input[id="select_all_payments"]');
        var checkboxes = $('tbody input.select-payments');
        if(checkboxes.filter(':checked').length == checkboxes.length){
            checkAll.prop('checked', 'checked');
        }else{
            checkAll.removeProp('checked');
            checkAll.prop('checked', false);
        }
        checkAll.iCheck('update');
        e.stopPropagation();
    });

   // Handle click on "Select all" control
    $('#select-payments-table thead', selectPaymentsTable.table().container()).on('ifChanged', 'input[id="select_all_payments"]', function(e){
        if(this.checked){
            $('#select-payments-table tbody input[class="select-payments"]:not(:checked)').iCheck('check');
        }else{
            $('#select-payments-table tbody input[class="select-payments"]:checked').iCheck('uncheck');
        }
        e.stopPropagation();
    });

    // Handle table draw event
    selectPaymentsTable.on('draw', function(){
        var checkAll = $('thead input[id="select_all_payments"]');
        var checkboxes = $('tbody input.select-payments');
        var selected_payments_id_value = $('#selected_payments_id_value').val();

        if(checkboxes.length != 0){
            if(selected_payments_id_value == 'all' || checkboxes.filter(':checked').length == checkboxes.length){
                checkAll.prop('checked', 'checked');
            }else{
                checkAll.removeProp('checked');
                checkAll.prop('checked', false);
            }
            checkAll.prop('disabled', false);
            checkAll.iCheck('update');
        }else{
            checkAll.removeProp('checked');
            checkAll.prop('disabled', true);
        }
    });

	$('#select-payments-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		var download_pdf = $('#download-pdf-modal').is(':visible');
		if(download_pdf == true){
			$("body").addClass("modal-open");
		}
	});

	$('#select-payments-modal').on('show.bs.modal', function(e){
		var modal = $(this);
		var selected_payments_id_value = $('#selected_payments_id_value').val();
		if(selected_payments_id_value != 'all'){
			payments_rows_selected = selected_payments_id_value.split(",");
		}else if(selected_payments_id_value == 'all'){
			payments_rows_selected = [];
		}
		selectPaymentsTable.draw();
	});

	$('button#select-payments-btn').on('click', function() {
        var btn = $(this);
        btn.button('loading');
        var total = $('#payments_data_total').val();

        if(payments_rows_selected == "") {
            swal('Please select Payment.', '', 'error').catch(swal.noop);
            setTimeout(function(){
	            btn.button('reset');
	        }, 500);
            return false;
        }

        setTimeout(function(){
        	if(total == payments_rows_selected.length){
        		$('#selected_payments_pdf').text('All payments selected.');
        		$('#selected_payments_id_value').val('all');
        	}else{
        		$('#selected_payments_pdf').text(payments_rows_selected.length+' payment(s) selected.');
        		$('#selected_payments_id_value').val(payments_rows_selected);
        	}
        	$('#select-payments-modal').modal('hide');
            btn.button('reset');
        }, 1000);

       return false;
    });
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.min.js"></script>
<script>
    jQuery(document).ready(function(){

        $("form#payment-method-modal-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"name":{"laravelValidation":[["Required",[],"The payment method name field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var paymentMethodForm = $('#payment-method-modal-form');
	$('#payment-method-modal').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var payment_method_name = button.data("payment-method-name");
		var modal = $(this);

		paymentMethodForm.attr('action', action);
		paymentMethodForm.attr('method', method);
		paymentMethodForm.find('[name="_method"]').val(method);

		if(method == 'PUT'){
			modal.find('.modal-title').html('<i class="fa fa-pencil-square-o"></i> Edit Payment Method');
			modal.find('#payment_method_name').val(payment_method_name);
		}

		if(method == 'POST'){
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Payment Method');
		}			
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	$('#payment-method-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		paymentMethodForm.attr('action', '');
		paymentMethodForm.attr('method', '');
		paymentMethodForm.find('[name="_method"]').val('');	
		modal.find('#payment_method_name').val('')
		modal.find('#address').val('');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

	paymentMethodForm.submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = $(this).attr('action');
        var method = $(this).find('input[name="_method"]').val();
	    if(form.valid()){
	    	$.ajax({
                url: action,
                type: method,
                dataType: 'json',
                data: form.serialize(),
            })
            .done(function(response) {
                if(response.type == 'success'){
                	if (typeof paymentMethodTable === 'undefined') {
                		var installment_tab = $('#li-installment').hasClass('active');
                		var full_payment_tab = $('#li-cash').hasClass('active');
                		var installment_modal = $('#installment-modal').is(':visible');
                		var expense_modal = $('#expense-modal').is(':visible');
					    var newOption = new Option(response.data.name, response.data.id, true, true);

                		if(installment_tab){
							$('#payment-modal').find("#ins_method_id").append(newOption).trigger('change');
                		}else if(full_payment_tab){
                			$('#payment-modal').find("#method_id").append(newOption).trigger('change');
                			if(installment_modal == true){
                				$('#installment-modal').find("#installment_method_id").append(newOption).trigger('change');
                			}
                		}else{
                			if(installment_modal == true){
                				$('#installment-modal').find("#installment_method_id").append(newOption).trigger('change');
                			}
                			if(expense_modal == true){
                				$('#expense-modal').find("#payment_method").append(newOption).trigger('change');
                			}
                		}
					}else{
						paymentMethodTable.draw();
					}
                    $('#payment-method-modal').modal('hide');
                    swal(response.message, '', 'success');
                    $('.btn-loading').button('reset');
                }else if(response.type == 'exists'){
                	swal(response.message, '', 'error');
                    $('.btn-loading').button('reset');
                }else{
                	$('#payment-method-modal').modal('hide');
                	$('.btn-loading').button('reset');
                }
            });
	    }
	    setTimeout(function(){
    		$('.btn-loading').button('reset');
    	}, 500)
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#recall-date-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"recall_date":{"laravelValidation":[["Required",[],"The recall date field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var recall_date_form = $('form#recall-date-form');
	var body = $('body');

	$("#recall_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});
	$("#recall_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    minDate: new Date(),
      dateFormat: body.data('datepicker-format'),
	});

	$('#recall-date-modal').on('show.bs.modal', function(e){
		var modal = $(this);
		var button = $(e.relatedTarget);
		var recall_date = button.data('recall_date');
		modal.find('#recall_date').val(recall_date);
	});

	$('#recall-date-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);
		recall_date_form[0].reset();
		modal.find('#recall_date').val('');
	});

	recall_date_form.submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = form.attr('action');

		if(form.valid()){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: form.serializeArray(),
				url: action,
				success: function(response){
					if(response.type == 'success'){
						var patient = response.data;
		                swal({
	                    	title: 'Success!',
	                    	text: response.message,
	                    	type: 'success'
	                    });
	                    $('#recall_date_text').text(patient.recall_date_display);
	                    $('#recall_date_btn').data('recall_date', patient.recall_date_form);
	                    $('#recall-date-modal').modal('hide');
					}else{
						$('#recall-date-modal').modal('hide');
					}
					$('.btn-loading').button('reset');
				},
	            error :function( jqXhr ) {
	                $('.btn-loading').button('reset');
	            }
			});
		}else{
			setTimeout(function(){
                $('.btn-loading').button('reset');
            }, 500);
		}
	});
});
</script><script type="text/javascript" src="https://web.dentalclinicapp.com/vendor/jsvalidation/js/jsvalidation.js"></script>
<script>
    jQuery(document).ready(function(){

        $("#treatment-plan-form").each(function() {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block error_message',

                // errorPlacement: function (error, element) {
                //     if (element.parent('.input-group').length ||
                //         element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                //         error.insertAfter(element.parent());
                //         // else just place the validation message immediately after the input
                //     } else {
                //         error.insertAfter(element);
                //     }
                // },
                errorPlacement: function(error, element) {
                    
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.hasClass('intlphone')) {

                        if(element.hasClass('radio-inline')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else if(element.hasClass('entry_for')) {
                            $(element).closest('.form-group').find('div.inline-message').html(error);
                        } else {

                            error.insertAfter(element.parent());
                        }
                        // else just place the validation message immediatly after the input
                    } else if (element.hasClass('select2')) {
                        error.insertAfter(element.next('span'));
                    } else if (element.hasClass('select2-hide-search')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.hasClass('group')) {
                        $(element).closest('.form-group').find('div.group-message').html(error);
                    } else if (element.hasClass('textbox-short')) {
                        $(element).closest('.form-group').find('div.long-message').html(error);
                    } else if (element.prop('type') === 'hidden') {
                        $(element).closest('.form-group').find('div.combobox-message').html(error);
                    } else if (element.hasClass('min_age')) {
                        $(element).closest('.group').find('div.inline-message').html(error);
                    } else if( element.hasClass('text-label')){
                       $(element).closest('.form-group').find('div.inline-message').html(error);
                    } else {
                        
                        error.insertAfter(element);
                    }

                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },

                
                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                
                rules: {"treatment_date":{"laravelValidation":[["Required",[],"The treatment date field is required.",true]]},"treatment_name":{"laravelValidation":[["Required",[],"Treatment Plan Name field is required.",true]]},"procedure_id":{"laravelValidation":[["Required",[],"The procedure field is required.",true]]},"procedure_amount":{"laravelValidation":[["Required",[],"The amount field is required.",true]]}}            });
        });
    });
</script>

<script type="text/javascript">
$(function(){
	var treatmentPlanTable = $('#treatment-plan-table').DataTable({
		processing: true,
	    serverSide: true,
	    "dom": '<"top"f>rt<"bottom"p>',
	    "deferLoading":0,
	    ajax: {
	        url:'https://web.dentalclinicapp.com/clinic/patient/BD4Padp3Jr/get-treatment-plans',
	        method: 'POST'
	    },
	    columns: [
	    	{data: 'DT_Row_Index', orderable: false, searchable: false,width:'15px', className : 'text-center'},
	    	{data: 'details', name: 'details', searchable: false, width:'340px'},
	    	{data: 'treatment_notes', name: 'treatment_notes', orderable: false, searchable: false},
	    	{data: 'updated_date', name: 'updated_date', orderable: true, searchable: false,width:'150px'},
	    	{ data: 'action', name: 'action', orderable: false, searchable: false,width:'100px',className : 'text-center'},
	    ],
	    fnDrawCallback: function ( oSettings ) {
	    	$(document).find('a#btn-treatment-delete').click(function(){
	    		var action = $(this).data('action');
				swal({
				    title: 'Are you sure?',
				    text: "You will not be able to recover this Treatment Plan!",
				    type: 'warning',
				    showCancelButton: true,
				    confirmButtonColor: '#3085d6',
				    cancelButtonColor: '#d33',
				    confirmButtonText: 'Yes, delete it!',
				    showLoaderOnConfirm: true,
				    preConfirm: function(){
				    	 return new Promise(function(){
	 					        $.ajax({
	 					            type: "DELETE",
	 					            url: action,
	 					            dataType: 'json',
	 					            success: function(data) {
	 					                if(data.type == "success") {
	 					                    swal({
	 				                    		title: 	'Deleted!',
	 				                    	  	text: 	data.message,
	 				                    	 	type: 	'success'
	 					                    });
	 					                    treatmentPlanTable.draw();
	 					                    $('.treatment-plan-count').html(data.count);
	 					               }else{
	 	               		                swal({
	 		       		                		title: 	'Error!',
	 		       		                	  	text: 	data.message,
	 		       		                	 	type: 	'error'
	 	               		                });
	 					               }
	 					            },
	 					            error :function( jqXhr ) {
	 					                swal(
	 				                      'Error!',
	 				                      'Something went wrong.',
	 				                      'error'
	 				                    );        
	 					            }
	 					        });
				    	 });
				    },
				    allowOutsideClick: false
				});
	    	});
	    },
	    "order": [[4,'desc']],
	});

	$('#treatment-plan-form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var action = form.attr('action');
		var procedure_count = form.find('input[name^="procedure_amount"]').length;

		if(form.valid()){
			if(procedure_count > 0){
				$.ajax({
					type: 'POST',
					dataType: 'json',
					data: form.serialize(),
					url: action,
					success: function(data){
						if(data.type == 'success'){
							swal({ 
								title: data.message,
					            text: "Do you want to print this treatment plan?",
					            type: "success",
					            showCancelButton: true,
						        confirmButtonColor: '#3085d6',
						        cancelButtonColor: '#d33',
						        confirmButtonText: 'Yes',
						        cancelButtonText: 'No',
					            allowOutsideClick: false
							}).then(okay => {
								if(okay.value){
									var print_url = data.print_url;
									if(print_url){
										window.open(print_url, '_blank');
									}
								}
							});
						    $('.treatment-plan-count').html(data.count);
						    treatmentPlanTable.draw();
						}
						$('#treatment-plan-modal').modal('hide');
						$('.btn-loading').button('reset');
					},
	                error :function( jqXhr ) {
	                    swal(
	                      'Error!',
	                      'Something went wrong.',
	                      'error'
	                    );      
	                    $('.btn-loading').button('reset');  
	                }
				});
			}else{
				swal('Procedure is required.', '', 'error')
				$('.btn-loading').button('reset');
			}
			return false;
		}else{
			$('.btn-loading').button('reset');
		}
	});
});
</script><script type="text/javascript">
	function computeTotalAmount(element, type)
	{
		var _this = $(element);

		if(type == 'quantity') {
			var quantity = _this.val();
			var amount_id = _this.data('procedure_amount_id');
			var amount = parseFloat($('#'+amount_id).val());
		}

		if(type == 'amount') {
			var amount = parseFloat(_this.val());
			var quantity_id = _this.data('procedure_quantity_id');
			var quantity = parseInt($('#'+quantity_id).val());
		}

		if(type == 'procedure') {

			var amount_id = _this.data('procedure_amount_id');
			var amount = parseFloat($('#'+amount_id).val());

			var quantity_id = _this.data('procedure_quantity_id');
			var quantity = parseInt($('#'+quantity_id).val());

			console.log(quantity_id);
			console.log(quantity);

			console.log(amount_id);
			console.log(amount);
			console.log($('#'+amount_id).val());
		}

		//alert(type)
		//alert(total_amount)

		
		var total_amount_id = _this.data('procedure_total_amount_id');
		var total_amount = parseFloat((quantity * amount));
		$('#'+total_amount_id).val(total_amount);
	}

$(function(){
	var body = $('body');
	var format = "mm/dd/yyyy";
	var dateToday = moment(new Date()).format(format.toUpperCase());

	$("#treatment_date").inputmask(body.data('datepicker-mask'), {"placeholder": body.data('datepicker-mask')});
	$("#treatment_date").datepicker({
	    changeMonth: true,
	    changeYear: true,
	    dateFormat: body.data('datepicker-format'),
	});

	$('#treatment-plan-modal').on('show.bs.modal', function(e){
		e.stopImmediatePropagation();
		var button = $(e.relatedTarget);
		var action = button.data('action');
		var method = button.data('method');
		var form = $('#treatment-plan-form');

		var modal = $(this);
		form.attr('action', action);
		form.attr('method', method);
		form.find('[name="_method"]').val(method);
		
		if(method == 'PUT'){
			var edit_url = button.data('edit-url');
			if(edit_url){
				showLoader();
				$.ajax({
	                url: edit_url,
	                type: 'GET',
	            }).done(function(response){
	            	var procedures = response.procedures;
	            	console.log(response);
	            	if(procedures.length >= 1){
			            $('.add-procedure-amount').text('Add More Procedure');
			        }
	            	procedures.forEach(function(procedure, key) {
	            		console.log(procedure);
	            		addProcedure(procedure, key);
					});

					if(response.chart_id_string != "") {
						var chart_id_arr = [];
						var selectedIds = response.chart_id_string.split(",");

						$.each(selectedIds, function(key, value){
	        				chart_id_arr.push(value)
						});
						$('#treatment-plan-modal').find('#treatment_plan_chart_id').val(chart_id_arr);
					}

					if(response.chart_id_name_string != "") {
						var chart_name_arr = [];
						var chart_name_arr_label = [];
						var selectedNames = response.chart_id_name_string.split(",");
						var chart_name = "";
						$.each(selectedNames, function(key, value){
							chart_name = value;
	        				chart_name_arr.push(value)
	        				chart_name_arr_label.push('<span class="badge">'+value+'</span>')
						});

						$('#treatment-plan-modal').find('#treatment_plan_chart_name').val(chart_name_arr);
						
						if($.isNumeric(chart_name)){
							$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Number: &nbsp;</label>'+chart_name_arr_label.join(" ")+'&nbsp;&nbsp;<a href="#" id="treatment_plan_clear_tooth" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-times"></i> Clear</a><br />');
						}else{
							$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html('<label>Tooth Letter: &nbsp;</label>'+chart_name_arr_label.join(" ")+'&nbsp;&nbsp;<a href="#" id="treatment_plan_clear_tooth" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-times"></i> Clear</a><br />');
						}
					}

					if(response.treatment_date_form != ''){
						modal.find('#treatment_date').val(response.treatment_date_form);
					}else{
						modal.find('#treatment_date').val('');
					}
					$('#treatment_notes').val(response.treatment_notes);
					$('#treatment_plan_name').val(response.treatment_name);
					hideLoader();
	            }).fail(function() {
	                swal('Error', 'Ops!, Something went wrong. Please reload this page and try again.', 'error');
	            });
			}
			modal.find('.modal-title').html('<i class="fa fa-pencil"></i> Edit Treatment Plan');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}
		if(method == 'POST'){
			hideLoader();
			modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Treatment Plan');
			modal.find('.form-group').removeClass('has-error has-success');
			modal.find('[id*="-error"]').remove();
		}
	});

	$('#treatment-plan-modal').on('hidden.bs.modal', function(e){
		var modal = $(this);

		modal.find('#treatment_plan_name').val('');
		modal.find('#treatment_date').val(dateToday);
		modal.find("#treatment_notes").val('');
		modal.find('.add-procedure-amount').text('Add Procedure');
		modal.find('.added-procedure-form').remove();
		modal.find('#treatment_plan_chart_id').val("");
		modal.find('#treatment_plan_chart_name').val("");
		modal.find('#treatment_plan_tooth_name').html("");
		modal.find('.modal-title').html('<i class="fa fa-plus-circle"></i> Add Treatment Plan');
		modal.find('.form-group').removeClass('has-error has-success');
		modal.find('[id*="-error"]').remove();
	});

    var form = $('form#treatment-plan-form');
    $('body').on('click', 'button.add-procedure-amount', function(e){
    	e.stopImmediatePropagation();
        //var counter = form.find('input[name^="procedure_amount"]').length + 1;

        var counter = parseInt($(".procedure_count").last().text() != '' ? $(".procedure_count").last().text() : 0) + 1;
        var procedure_count = counter; 
        if(counter >= 1){
            $('.add-procedure-amount').text('Add More Procedure');
        }

        var new_input = "<div class=\"col-md-12 procedure-form added-procedure-form\" style=\"padding-bottom: 10px;margin-bottom: 10px;border-bottom:1px solid #ccc;\">";
	        	new_input += "<div class=\"form-group\">";
	                new_input += "<label class=\"control-label col-md-3\"><a href=\"#remove-procedure\" style=\"font-size: 20px;\" class=\"text-danger remove-procedure-btn\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Procedure\"><i class=\"fa fa-times\"></i></a> &nbsp;&nbsp;Procedure <span class=\"procedure_count\">"+procedure_count+"</span>:</label>";
	                new_input += "<div class=\"col-md-5\">";
	                	new_input += "<div class=\"input-group\">";
	                		new_input += "<select class=\"form-control select2 procedure_ids\" name=\"procedure_id[new_"+counter+"]\" style=\"width:220px\" data-procedure_amount_id=\"procedure_amount"+counter+"\" data-procedure_total_amount_id=\"procedure_total_amount"+counter+"\" data-procedure_quantity_id=\"procedure_quantity"+counter+"\"></select>";
	                    new_input += "</div>";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-4\">";
	                    new_input += "<input type=\"number\" min=\"0\" onkeyup=\"computeTotalAmount(this, 'amount')\" data-procedure_quantity_id=\"procedure_quantity"+counter+"\" data-procedure_total_amount_id=\"procedure_total_amount"+counter+"\" name=\"procedure_amount[new_"+counter+"]\" id=\"procedure_amount"+counter+"\" class=\"form-control min_amount\" style=\"width:100%\" placeholder=\"Amount\" autocomplete=\"off\">";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-3 col-md-offset-3\" style=\"margin-top: 20px;\">";
	                	new_input += "<div class=\"input-group\">";
	                		new_input += "<div class=\"input-group-addon\"><b>QTY</b></div>";
	                    	new_input += "<input type=\"number\" min=\"1\" onkeyup=\"computeTotalAmount(this, 'quantity')\" id=\"procedure_quantity"+counter+"\" data-procedure_amount_id=\"procedure_amount"+counter+"\" data-procedure_total_amount_id=\"procedure_total_amount"+counter+"\" max-length=\"2\" name=\"procedure_quantity[new_"+counter+"]\" value=\"1\" class=\"form-control\" style=\"width:100%\" placeholder=\"Quantity\" autocomplete=\"off\">";
	                	new_input += "</div>";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-6\" style=\"margin-top: 20px;\">";
	                    new_input += "<input type=\"number\" min=\"0\" name=\"procedure_total_amount[new_"+counter+"]\" id=\"procedure_total_amount"+counter+"\" disabled class=\"form-control\" style=\"width:100%\" placeholder=\"Total amount\" autocomplete=\"off\">";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-9 col-md-offset-3\" style=\"margin-top: 20px;\">";
	                	new_input += "<textarea name=\"procedure_remarks[new_"+counter+"]\" class=\"form-control\" style=\"resize: none;\" rows=\"3\" placeholder=\"Remarks\" autocomplete=\"off\"></textarea>";
	                new_input += "</div>";
	            new_input += "</div>";
	        new_input += "</div>";
	        

        $(this).closest('.procedure-form').parent().append(new_input);
        procedureSelect2(0);
        return false;   
    });

     $('body').on('click', 'a.remove-procedure-btn', function(e){
        var counter = form.find('input[name^="procedure_amount"]').length;
        if(counter <= 1){
            $('.add-procedure-amount').text('Add Procedure');
        }
        $(this).closest('.procedure-form').remove();
    });

    $('body').on('click', 'a#treatment_plan_clear_tooth', function(e){

    	Swal.fire({
		  title: 'Clear confirmation',
		  text: "",
  		  icon: 'warning',
		  showDenyButton: true,
		  showCancelButton: true,
		  confirmButtonText: `Clear`
		}).then((result) => {
			
		  if (result.value) {
		    $('#treatment-plan-modal').find('#treatment_plan_chart_id').val("");
			$('#treatment-plan-modal').find('#treatment_plan_chart_name').val("");
			$('#treatment-plan-modal').find('#treatment_plan_tooth_name').html("");
		  }
		})
      	
    });

   	
   	
    function procedureSelect2(amount)
    {
     	$('#treatment-plan-form').find(".procedure_ids").select2({
	        placeholder:' - Select - ',
	        triggerChange: true,
	        allowClear: true,
	        dropdownParent: $('#treatment-plan-form'),
	        ajax: {
	            url: 'https://web.dentalclinicapp.com/clinic/procedures/procedure-select2',
	            delay: 400,
	            data: function (params) {
	              return {
	                name: params.term
	              };
	            },
	            processResults: function (data, page) {
	              return {
	                results: data
	              };
	            }
	        },
	        templateSelection: function (data, container) {
			    // Add custom attributes to the <option> tag for the selected option
			    $(data.element).attr('data-min_amount', data.min_amount);
			    $(data.element).attr('data-max_amount', data.max_amount);
			    
			    return data.text;
			}
		}).on('change.select2', function (e){
			var min_amount = $(this).find(':selected').data('min_amount');
			$(this).closest('.form-group').find('.min_amount').val(min_amount);
			$(this).closest('.form-group').find('.min_amount').valid();

			computeTotalAmount(this, 'procedure');
			$(this).valid();
		});
    }
    procedureSelect2(0);

    function addProcedure(procedure, key)
    {
        var new_input = "<div class=\"col-md-12 procedure-form added-procedure-form\" style=\"padding-bottom: 10px;margin-bottom: 10px;border-bottom:1px solid #ccc;\">";
	        	new_input += "<div class=\"form-group\">";
	                new_input += "<label class=\"control-label col-md-3\"><a href=\"#remove-procedure\" style=\"font-size: 20px;\" class=\"text-danger remove-procedure-btn\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Procedure\"><i class=\"fa fa-times\"></i></a> &nbsp;&nbsp;Procedure <span class=\"procedure_count\">"+(key + 1)+"</span>:</label>";
	                new_input += "<div class=\"col-md-5\">";
	                	new_input += "<div class=\"input-group\">";
	                		new_input += "<select class=\"form-control select2 procedure_ids\" name=\"procedure_id["+procedure.id+"]\" id=\"procedure"+key+"\" style=\"width:220px\" data-procedure_amount_id=\"procedure_amount"+key+"\" data-procedure_total_amount_id=\"procedure_total_amount"+key+"\" data-procedure_quantity_id=\"procedure_quantity"+key+"\"></select>";
	                    new_input += "</div>";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-4\">";
	                    new_input += "<input type=\"number\" min=\"0\"  onkeyup=\"computeTotalAmount(this, 'amount')\" data-procedure_quantity_id=\"procedure_quantity"+key+"\" data-procedure_total_amount_id=\"procedure_total_amount"+key+"\" id=\"procedure_amount"+key+"\" name=\"procedure_amount["+procedure.id+"]\" value="+procedure.procedure_amount+" class=\"form-control min_amount\" style=\"width:100%\" placeholder=\"Amount\" autocomplete=\"off\">";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-3 col-md-offset-3\" style=\"margin-top: 20px;\">";
	                	new_input += "<div class=\"input-group\">";
	                		new_input += "<div class=\"input-group-addon\"><b>QTY</b></div>";
	                    		new_input += "<input type=\"number\" min=\"1\" onkeyup=\"computeTotalAmount(this, 'quantity')\" id=\"procedure_quantity"+key+"\" data-procedure_amount_id=\"procedure_amount"+key+"\" data-procedure_total_amount_id=\"procedure_total_amount"+key+"\" max-length=\"2\" name=\"procedure_quantity["+procedure.id+"]\" value=\""+procedure.quantity+"\" class=\"form-control\" style=\"width:100%\" placeholder=\"Quantity\" autocomplete=\"off\">";
	                	new_input += "</div>";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-6\" style=\"margin-top: 20px;\">";
	                    new_input += "<input type=\"number\" min=\"0\" name=\"procedure_total_amount["+procedure.id+"]\" id=\"procedure_total_amount"+key+"\" disabled class=\"form-control\" style=\"width:100%\" placeholder=\"Total amount\" autocomplete=\"off\">";
	                new_input += "</div>";
	                new_input += "<div class=\"col-md-9 col-md-offset-3\" style=\"margin-top: 20px;\">";
	                	new_input += "<textarea name=\"procedure_remarks["+procedure.id+"]\" class=\"form-control\" style=\"resize: none;\" rows=\"3\" placeholder=\"Remarks\" autocomplete=\"off\">"+procedure.remarks+"</textarea>";
	                new_input += "</div>";
	            new_input += "</div>";
	        new_input += "</div>";
	        

        $('button.add-procedure-amount').closest('.procedure-form').parent().append(new_input);
        procedureSelect2(procedure.procedure_amount);
        var Values = new Option(procedure.procedure.name, procedure.procedure.id, false, true);
	    $("#procedure"+key+"").append(Values).trigger('change');
	    $("#procedure_amount"+key+"").val(procedure.procedure_amount);
	    computeTotalAmount("#procedure_amount"+key, 'amount');
    }
});
function showLoader()
{
    $('.loader').show();
    $('.form-content').hide();
    $('#btn_save_treatment').attr('disabled', true);
}

function hideLoader()
{
    $('.loader').hide();
    $('.form-content').show();
    $('#btn_save_treatment').removeAttr('disabled');
}
</script>

<!-- logs -->

<script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#patient-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "0";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#medical-history-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "4";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#dental-chart-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "5";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#dental-notes-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "6";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#appointment-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "2";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#photo-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "8";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#prescription-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "21";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#treatment-plan-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "36";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#payment-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "9";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#request-forms-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "38";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
    $(function(){
        var patientLogsTable = $('#dental-certificates-users-logs-table').DataTable({
            processing: true,
            serverSide: true,
            paging:false,
            filter:false,
            info:false,
                        deferLoading: 0,
                        language: {
                "processing": "Loading. Please wait...",
                "emptyTable": "No logs found."
            },
            ajax: {
                url:"https://web.dentalclinicapp.com/clinic/user-logs-datatable",
                method: 'GET',
                data:function(d){
                    d.menu_id = "39";
                    d.patient_id = "403814";
                    d.data_id = "0";
                }
            },
            columns: [
                { data: 'user_logs', name: 'user_logs',orderable: false, searchable: false},
            ],
            fnDrawCallback: function ( oSettings ) {

            },
             "order": [],
        });
    });
</script><script type="text/javascript">
$(function(){
	$('#btn-delete').click(function(){
		var btn = $(this);
		var action = btn.data('action');
		swal({
		    title: 'Are you sure?',
		    text: "You will not be able to recover this Patient!",
		    type: 'warning',
		    showCancelButton: true,
		    confirmButtonColor: '#3085d6',
		    cancelButtonColor: '#d33',
		    confirmButtonText: 'Yes, delete it!',
		    showLoaderOnConfirm: true,
		    preConfirm : function(){
		    	return new Promise(function(){
			        $.ajax({
			            type: "DELETE",
			            url: action,
			            dataType: 'json',
			            success: function(data) {
			                if(data.type == "success") {
			                    swal({
		                    		title: 	'Deleted!',
		                    	  	text: 	data.message,
		                    	 	type: 	'success'
			                    }).then(function(){
			                    	window.location.href = "https://web.dentalclinicapp.com/clinic/patient";
			                    });
			               }else{
           		                swal({
       		                		title: 	'Error!',
       		                	  	text: 	data.message,
       		                	 	type: 	'error'
           		                });
			               }
			            },
			            error :function( jqXhr ) {
			                swal(
		                      'Error!',
		                      'Something went wrong.',
		                      'error'
		                    );        
			            }
			        });
		    	});
		    },
		    allowOutsideClick: false
		});
	});

	var deepLoader = [];
	$('.panel-collapse').on('show.bs.collapse', function () {
		var deep_data = $(this).data('deeploader');
		if(deep_data != undefined){
			var ifExist = $.inArray(deep_data, deepLoader);
			if(ifExist < 0){
				if(deep_data == 'medical_files'){
					$('#medical-files-table').DataTable().draw();
					$('#medical-history-users-logs-table').DataTable().draw();
				}
				if(deep_data == 'treatment_plan'){
					$('#treatment-plan-table').DataTable().draw();	
					$('#treatment-plan-users-logs-table').DataTable().draw();
				}
				if(deep_data == 'dental_chart'){
					$('#dental-chart-table').DataTable().draw();
					$('#dental-chart-users-logs-table').DataTable().draw();
				}
				if(deep_data == 'dental_note'){
					$('#dental-notes-table').DataTable().draw();
					$('#dental-notes-users-logs-table').DataTable().draw();
				}

				if(deep_data == 'appointment'){
					$('#appointment-table').DataTable().draw();	
					$('#appointment-users-logs-table').DataTable().draw();
				}
				if(deep_data == 'dental_photo'){
					$('#photo-table').DataTable().draw();	
					$('#photo-users-logs-table').DataTable().draw();
				}
				if(deep_data == 'prescription'){
					$('#prescription-table').DataTable().draw();	
					$('#prescription-users-logs-table').DataTable().draw();
				}

				if(deep_data == 'dental_payment'){	
					$('#payment-installment-table').DataTable().draw();
					$('#payment-users-logs-table').DataTable().draw();
				}

				if(deep_data == 'request-forms'){	
					$('#request-forms-table').DataTable().draw();
					$('#request-forms-logs-table').DataTable().draw();
				}

				if(deep_data == 'dental-certificates'){	
					$('#dental-certificates-table').DataTable().draw();
					$('#dental-certificates-logs-table').DataTable().draw();
				}
				deepLoader.push(deep_data);
			}else{

			}
		}
	})

	
	});
</script>
    
<div class="modal-backdrop fade in"></div></body></html>