<?php /* Smarty version 2.6.19, created on 2008-04-18 07:18:47
         compiled from addcommo.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/chkcommo.js"></script>


<table width="720" border="0" cellpadding="0" cellspacing="1">
<form id="addcommo" name="addcomm" enctype="multipart/form-data" method="post" action="addcommo_chk.php"  onsubmit="return chkcommo(addcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">������Ʒ</td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ���ƣ�</td>
        <td width="618" class="right">
        	<input id="name" type="text" name="name" size="25" class="txt">
            <font color="#FF0000">*</font>		</td>
    </tr>
    <tr>
        <td height="25" class="left">��ƷͼƬ��</td>
        <td height="25" class="right">
	        <input id="pics" type="file" name="pics" class="langtxt">        </td>
    </tr>
	<tr>
        <td height="25" class="left">��Ʒ���أ�</td>
        <td height="25" class="right">
        	<input id="area" name="area" type="text" class="txt">
            <font color="#FF0000">*</font>		</td>
	</tr>
    <tr>
        <td height="25" class="left">��Ʒ�ͺţ�</td>
        <td height="25" class="right">
        	<input id="model" name="model" type="text" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ���</td>
      <td height="25" align="left" valign="top" class="right">
      <iframe id="menu1" name="menu1" src="menu.php" width="300" height="22" frameborder="0" scrolling="no" style=" margin-top:0px; margin-left: 0px; top:0px;"></iframe>
      <input id="stype" name="stype" type="hidden" value="" />
         </td>
    </tr>
    <tr>
        <td height="22" class="left">��ƷƷ�ƣ�</td>
        <td height="22" class="right">
        	<input id="brand" name="brand" type="text" class="txt">        </td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ������</td>
        <td height="25" class="right">
        	<input id="stocks" name="stocks" type="text" value="1" class="txt">
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">�г��۸�</td>
    	<td height="25" class="right">
    		<input id="m_price" name="m_price" type="text" class="shorttxt" onkeyup="cvp(addcommo)">&nbsp;Ԫ
            <font color="#FF0000">*</font>        </td>
    </tr>
	<tr>
        <td height="25" class="left">�����ʣ�</td>
        <td height="25" class="right">
        	<input id="fold" name="fold" type="text" value="9" class="shorttxt" onkeyup="cvp(addcommo)">&nbsp;��
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">��Ա�۸�</td>
    	<td height="25" class="right"><div id="v_price">&nbsp;Ԫ</div></td>
    </tr>
    <tr>
        <td height="25" class="left">�Ƿ���Ʒ��</td>
        <td height="25" class="right">
          <select id="isnew" name="isnew" class="shorttxt" >
            <option value="1" selected>��</option>
            <option value="0">��</option>
          </select>		</td>
	</tr>
    <tr>
        <td height="25" class="left">�Ƿ��Ƽ���</td>
        <td height="25" class="right">
        <select id="isnom" name="isnom" class="shorttxt" >
        <option value="1">��</option>
        <option value="0" selected>��</option>
        </select>        </td>
    </tr>
    <tr>
        <td height="25" class="left">����ʱ�䣺</td>
        <td height="25" class="right"><div id="dt"><?php echo $this->_tpl_vars['date']; ?>
</div></td>
      </tr>
	<tr>
    	<td height="80" class="left">��Ʒ��飺</td>
    	<td height="25" class="right"><textarea id="info" name="info" cols="80" rows="8">���޽���</textarea></td>
    </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="add" name="add" type="submit" class="btn" value="����">
    &nbsp;&nbsp;<input id="reset" name="reset" type="reset" value="��д" class="btn"></td>
    </tr>
	</form>
</table>
