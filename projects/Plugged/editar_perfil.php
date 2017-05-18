<?php session_start(); 
include('conexao.php');
$page_title = "Editar Perfil";
$userID = $_SESSION["id"];
$user = $baldeUsuarios->findOne(array('_id' => $userID));
?>
<!doctype html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body style="background:<?php echo $bg;?>">
	<header>
		<?php include('header.php'); ?>
	</header>

	<section id="feed">
		<div class="row">
	      	<div class="large-12 columns">
				<article>					
					<div id="cropContainerMinimal" style="background: url(<?php echo $user["imagem"]; ?>) no-repeat center center;"></div>
					<form id="EditaForm" action="edita_perfil.php" method="POST" />
						
						<input type="hidden" name="id" value="<?php echo $userID; ?>">
						<input type="hidden" name="imagem" id="imagem" value="<?php echo $user["imagem"]; ?>"/>

						<input type='text' name='nome' placeholder='Nome' value='<?php if (isset($user['nome'])) {echo $user['nome'];}?>'>
						<input type='text' name='email' placeholder='Email' value='<?php if (isset($user['email'])) {echo $user['email'];}?>'>						
						<input type='text' name='descricao' placeholder='Descricao' value='<?php if (isset($user['descricao'])) {echo $user['descricao'];}?>'>						
						<input type='text' name='idade' placeholder='Idade' value='<?php if (isset($user['idade'])) {echo $user['idade'];}?>'>						
						<input type='text' name='relacionamento' placeholder='Relacionamento' value='<?php if (isset($user['relacionamento'])) {echo $user['relacionamento'];}?>'>
						<input type='text' id="bg" name='bg' placeholder='Cor de fundo' value='<?php if (isset($user['bg'])) {echo $user['bg'];}?>'>
						<input type='submit' value='Salvar' />
					</form>
				</article>
			</div>
    	</div>
	</section>

	
		<!-- <span aria-hidden="true" class="li_bubble"></span>
		<span aria-hidden="true" class="li_heart"></span>
		<span aria-hidden="true" class="li_star"></span>
		<span aria-hidden="true" class="li_trash"></span>
		<span aria-hidden="true" class="li_camera"></span>
		<span aria-hidden="true" class="li_pen"></span>
		<span aria-hidden="true" class="li_location"></span>
		<span aria-hidden="true" class="li_like"></span>
		<span aria-hidden="true" class="li_photo"></span>
		<span aria-hidden="true" class="li_paperplane"></span> -->

	<footer>
		<?php include('footer.php'); ?>
   		<script type="text/javascript" src="js/croppic/croppic.min.js"></script>
		<script type="text/javascript" src="js/colorpicker/js/colorpicker.js"></script>
		<script type="text/javascript">

			/* COLOR PICKER */
			$('#bg').ColorPicker({
				onSubmit: function(hsb, hex, rgb, el) {
					$(el).val(hex);
					$(el).ColorPickerHide();
				},
				onBeforeShow: function () {
					$('#bg').value = $(this).ColorPickerSetColor(this.value);
				},
				onChange: function () {
					$('#bg').value = $(this).ColorPickerSetColor(this.value);
				}
			})
			.bind('keyup', function(){
				$(this).ColorPickerSetColor(this.value);
			});

			/* UPLOAD AND CROP IMAGE */
			/*var cropperOptions = {
			uploadUrl:'img_save_to_file.php',
			uploadData:{
				"user": "<?php echo $userID; ?>"
			},
			cropUrl:'img_crop_to_file.php',
			loadPicture:'upload/profileImage/<?php echo $user["imagem"]; ?>',
			outputUrlId:'imagem',
			customUploadButtonId:'btn-img'
			}
			var cropperHeader = new Croppic('profileImage', cropperOptions);*/

			var croppicContaineroutputMinimal = {
				uploadUrl:'img_save_to_file.php',
				cropUrl:'img_crop_to_file.php', 
				modal:false,
				doubleZoomControls:false,
			    rotateControls: false,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				outputUrlId:'imagem'
				//loadPicture:'<?php echo $user["imagem"]; ?>'
			}
			var cropContaineroutput = new Croppic('cropContainerMinimal', croppicContaineroutputMinimal);
		
			

		</script>
		<script type="text/javascript">
        $(document).ready(function() {
          $("#EditaForm").validate({
            // Define as regras
            rules:{
                email:{required: true, email: true},
                nome:{required: true}
            },
            // Define as mensagens de erro para cada regra
            messages:{                
                email:{
                    required: "Campo obrigatório",
                    email: "E-mail inválido"
                },
                nome:{
                    required: "Campo obrigatório"
                }
            }
          });           
              
          
        });  
      </script> 
	</footer>

</body>
</html>