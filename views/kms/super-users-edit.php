<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

<div class="content-box"><!-- Start Content Box -->

	<div class="content-box-header">
		<h3>Editing User: <?php echo $user['id'] ?></h3>
		<div class="clear"></div>
	</div> <!-- End .content-box-header -->

	<div class="content-box-content">

		<div class="tab-content default-tab" id="tab1">

			<?php if (KMS::Session()->path('ua.message.text') !== NULL) { ?>
			<div class="notification <?php echo KMS::Session()->path('ua.message.class') ?> png_bg">
				<a href="" class="close"><img src="/kms-asset/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo KMS::Session()->path('ua.message.text') ?>
				</div>
			</div>
			<?php } ?>

			<?php echo form::open(Route::url('kms-action', array('action'=>'super_user_edit'))) ?>
			<?php echo form::hidden('id', $user['id']) ?>

				<fieldset class="column-left">
					<p>
						<label for="ff_first_name">First Name</label>
						<input class="text-input medium-input" type="text" id="ff_first_name" name="first_name" value="<?php echo arr::get($user, 'first_name') ?>" />
					</p>
					<p>
						<label for="ff_username">Username</label>
						<input class="text-input medium-input" type="text" id="ff_username" name="username" value="<?php echo arr::get($user, 'username') ?>" />
					</p>
					<p>
						<label for="ff_email">Email</label>
						<input class="text-input medium-input" type="text" id="ff_email" name="email" value="<?php echo arr::get($user, 'email') ?>" />
					</p>
				</fieldset>

				<fieldset class="column-right">
					<p>
						<label for="ff_last_name">Last Name</label>
						<input class="text-input medium-input" type="text" id="ff_last_name" name="last_name" value="<?php echo arr::get($user, 'last_name') ?>" />
					</p>
					<p>
						<label for="ff_password">New Password</label>
						<input class="text-input medium-input" type="password" id="ff_password" name="password" value="<?php echo arr::get($user, 'password') ?>" />
					</p>
					<p>
						<label for="ff_password_confirm">Confirm New Password</label>
						<input class="text-input medium-input" type="password" id="ff_password_confirm" name="password_confirm" value="<?php echo arr::get($user, 'password_confirm') ?>" />
					</p>
				</fieldset>
				<div class="clear"></div>

				<p><strong>Site Roles</strong></p>
				<table class="data">
					<tbody>
						<?php foreach ($sites as $item) { ?>
						<tr>
							<td><?php echo $item['description'] ?></td>
							<td>
								<?php echo form::select('role[' . $item['id'] . ']', $item['roles'], $item['user_role'], array('class' => 'medium-input')) ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table><br />

				<p>
					<input class="button" type="submit" value="Submit" />
				</p>
				<div class="clear"></div><!-- End .clear -->
			</form>

		</div><!-- End .tab-content -->

	</div><!-- End .content-box-content -->

</div><!-- End .content-box -->