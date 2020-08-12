<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION', 'micropayment&trade; M&oacute;dulo de prepago
<br /><br />
enlaces<br />
<b>herramientas</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="limpiar las viejas &oacute;rdenes">
</a><br />
<br />
<b>Extern</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Manual">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Registro de Micropayment">
    </a>
');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'Prepago de micropayment&trade;');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Prepago');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>El formulario de pago prellenado le ser&aacute; enviado por correo electr&oacute;nico.</b><br />
Para concluir su pedido, ser&aacute; remitido a nuestro proveedor de servicios de pago, micropayment&trade;.<br /><br />
&#10004; seguro &nbsp; &#10004; simple &nbsp; &#10004; no es necesario registrarse
</div>
');

define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE','Prepago');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC','M&oacute;dulo de prepago por micropayment&trade;');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE','Cantidad m&iacute;nima');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC','Cantidad m&iacute;nima para este m&eacute;todo de pago');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE','Cantidad m&aacute;xima');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC','Cantidad m&aacute;xima para este m&eacute;todo de pago');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE','Posicionamiento');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC','Posicionamiento en la selecci&oacute;n de la forma de pago');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE','Selecci&oacute;n del pa&iacute;s');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC','Permitir pedidos s&oacute;lo de estos pa&iacute;ses (Lista separada por comas DE,EN)');

define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT','Pendiente de pago. Expira el %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN','Pagado en %s %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED','No deposit');
?>