<h1 class="title">Modifier le mot de passe</h1>
<br clear="all" />
<form method="post" action="<?php $config->rp() ?>">
<?php if (isset($message)){ ?>
<fieldset><?php echo $message; ?></fieldset>
<?php } ?>
<fieldset>
<input type="password" name="pw1" value="<?php if (isset($_COOKIE['pw'])) echo $_COOKIE['pw']; ?>" placeholder="Nouvau mot de passe" />
<input type="password" name="pw2" value="<?php if (isset($_COOKIE['pw'])) echo $_COOKIE['pw']; ?>" placeholder="Confirmation" />
</fieldset>
<fieldset>
<input type="submit" name="editpw" value="Modifier" />
<input type="reset" value="Reprendre" />
</fieldset>
</form>