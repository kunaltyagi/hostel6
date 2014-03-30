<?php /* Smarty version 2.6.19, created on 2010-09-22 20:56:25
         compiled from database.tpl */ ?>
<?php if ($this->_tpl_vars['showHidden']): ?>
<script type="text/javascript">MODx.showHidden = true;</script>
<?php endif; ?>
<script type="text/javascript" src="assets/js/sections/database.js"></script>
<form id="install" action="?action=database" method="post">
<h2><?php echo $this->_tpl_vars['_lang']['connection_title']; ?>
</h2>

<h3><?php echo $this->_tpl_vars['_lang']['connection_connection_and_login_information']; ?>
</h3>

<p><?php echo $this->_tpl_vars['_lang']['connection_connection_note']; ?>
</p>

<p><?php echo $this->_tpl_vars['_lang']['connection_database_info']; ?>
</p>
<br />

<p class="error"><?php echo $this->_tpl_vars['error_message']; ?>
</p>

<div class="labelHolder">
    <label for="database-type"><?php echo $this->_tpl_vars['_lang']['connection_database_type']; ?>
</label>
    <select id="database-type" value="<?php echo $this->_tpl_vars['config']['database_type']; ?>
" name="database_type">
        <option value="mysql"<?php if ($this->_tpl_vars['config']['database_type'] == 'mysql'): ?> selected="selected"<?php endif; ?>>mysql</option>
    </select>
    &nbsp;<span class="version-msg" id="database-type-error"></span>
</div>
<div class="labelHolder">
    <label for="database-server"><?php echo $this->_tpl_vars['_lang']['connection_database_host']; ?>
</label>
    <input id="database-server" value="<?php echo $this->_tpl_vars['config']['database_server']; ?>
" name="database_server" />
    &nbsp;<span class="field_error" id="database-server-error"></span>
</div>
<div class="labelHolder">
    <label for="database-user"><?php echo $this->_tpl_vars['_lang']['connection_database_login']; ?>
</label>
    <input id="database-user" name="database_user" value="<?php echo $this->_tpl_vars['config']['database_user']; ?>
" />
    &nbsp;<span class="field_error" id="database-user-error"></span>
</div>
<div class="labelHolder">
    <label for="database-password"><?php echo $this->_tpl_vars['_lang']['connection_database_pass']; ?>
</label>
    <input id="database-password" type="password" name="database_password"  value="<?php echo $this->_tpl_vars['config']['database_password']; ?>
" />
    &nbsp;<span class="field_error" id="database-password-error"></span>
</div>
<div class="labelHolder">
    <label for="dbase"><?php echo $this->_tpl_vars['_lang']['connection_database_name']; ?>
</label>
    <input id="dbase" value="<?php echo $this->_tpl_vars['config']['dbase']; ?>
" name="dbase" />
    &nbsp;<span class="field_error" id="dbase-error"></span>
</div>
<div class="labelHolder">
    <label for="table-prefix"><?php echo $this->_tpl_vars['_lang']['connection_table_prefix']; ?>
</label>
    <input id="table-prefix" value="<?php echo $this->_tpl_vars['config']['table_prefix']; ?>
" name="table_prefix" />
    &nbsp;<span class="field_error" id="tableprefix_error"></span>
</div>
<p>&rarr;&nbsp;<a href="javascript:void(0);" id="modx-testconn"><?php echo $this->_tpl_vars['_lang']['db_test_conn_msg']; ?>
</a></p>

<div id="modx-db-step1-msg" class="modx-hidden2">
    <span><?php echo $this->_tpl_vars['_lang']['db_connecting']; ?>
</span> <span class="connect-msg"></span>
</div>
<p id="modx-db-info">
    <br />- <?php echo $this->_tpl_vars['_lang']['mysql_version_server_start']; ?>
<span id="modx-db-server-version"></span>
    <br />- <?php echo $this->_tpl_vars['_lang']['mysql_version_client_start']; ?>
<span id="modx-db-client-version"></span>
    <hr />
</p>
<div id="modx-db-step2" class="modx-hidden2">

<div class="labelHolder">
    <label for="database-connection-charset"><?php echo $this->_tpl_vars['_lang']['connection_character_set']; ?>
</label>
    <select id="database-connection-charset" value="<?php echo $this->_tpl_vars['config']['database_connection_charset']; ?>
" name="database_connection_charset"></select>
    &nbsp;<span class="field_error" id="database_connection_charset_error"></span>
</div>
<?php if ($this->_tpl_vars['installmode'] == 0): ?>
<div class="labelHolder">
    <label for="database-collation"><?php echo $this->_tpl_vars['_lang']['connection_collation']; ?>
</label>
    <select id="database-collation" value="<?php echo $this->_tpl_vars['config']['database_collation']; ?>
" name="database_collation"></select>
    &nbsp;<span class="field_error" id="database_collation_error"></span>
</div>
<?php endif; ?>
<br />
<p>&rarr;&nbsp;<a href="javascript:void(0);" id="modx-testcoll"><?php echo $this->_tpl_vars['_lang']['db_test_coll_msg']; ?>
</a></p>

<p id="modx-db-step2-msg" class="modx-hidden2"><?php echo $this->_tpl_vars['_lang']['db_check_db']; ?>
<span></span></p>
</div>
<?php if ($this->_tpl_vars['installmode'] == 0): ?>
<div id="modx-db-step3" class="modx-hidden">
    <p class="title"><?php echo $this->_tpl_vars['_lang']['connection_default_admin_user']; ?>
</p>
    <p><?php echo $this->_tpl_vars['_lang']['connection_default_admin_note']; ?>
</p>

    <div class="labelHolder">
        <label for="cmsadmin"><?php echo $this->_tpl_vars['_lang']['connection_default_admin_login']; ?>
</label>
        <input type="text" name="cmsadmin" id="cmsadmin" value="<?php echo $this->_tpl_vars['config']['cmsadmin']; ?>
" />
        &nbsp;<span class="field_error" id="cmsadmin_error"><?php echo $this->_tpl_vars['error_cmsadmin']; ?>
</span>
    </div>
    <div class="labelHolder">
        <label for="cmsadminemail"><?php echo $this->_tpl_vars['_lang']['connection_default_admin_email']; ?>
</label>
        <input type="text" name="cmsadminemail" id="cmsadminemail" value="<?php echo $this->_tpl_vars['config']['cmsadminemail']; ?>
" />
        &nbsp;<span class="field_error" id="cmsadminemail_error"><?php echo $this->_tpl_vars['error_cmsadminemail']; ?>
</span>
    </div>
    <div class="labelHolder">
        <label for="cmspassword"><?php echo $this->_tpl_vars['_lang']['connection_default_admin_password']; ?>
</label>
        <input type="password" id="cmspassword" name="cmspassword" value="<?php echo $this->_tpl_vars['config']['cmspassword']; ?>
" />
        &nbsp;<span class="field_error" id="cmspassword_error"><?php echo $this->_tpl_vars['error_cmspassword']; ?>
</span>
    </div>
    <div class="labelHolder">
        <label for="cmspasswordconfirm"><?php echo $this->_tpl_vars['_lang']['connection_default_admin_password_confirm']; ?>
</label>
        <input type="password" id="cmspasswordconfirm" name="cmspasswordconfirm" value="<?php echo $this->_tpl_vars['config']['cmspasswordconfirm']; ?>
" />
        &nbsp;<span class="field_error" id="cmspasswordconfirm_error"><?php echo $this->_tpl_vars['error_cmspasswordconfirm']; ?>
</span>
    </div>
</div>
<?php endif; ?>
<br />

<?php if ($this->_tpl_vars['config']['unpacked'] == 1): ?>
<input type="hidden" id="unpacked" name="unpacked" value="1" />
<?php endif; ?>
<?php if ($this->_tpl_vars['config']['inplace'] == 1): ?>
<input type="hidden" id="inplace" name="inplace" value="1" />
<?php endif; ?>
<div class="setup_navbar">
    <input type="submit" name="proceed" id="modx-next" class="modx-hidden" value="<?php echo $this->_tpl_vars['_lang']['next']; ?>
" />
    <input type="button" onclick="MODx.go('options');" value="<?php echo $this->_tpl_vars['_lang']['back']; ?>
" />
</div>
</form>