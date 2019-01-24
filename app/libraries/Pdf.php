<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 *  ============================================================================== 
 *  Author	: Mian Saleem
 *  Email	: saleem@tecdiary.com 
 *  For		: DOMPDF
 *  Web     : https://github.com/dompdf/dompdf
 *  License	: LGPL-2.1
 *		: https://github.com/dompdf/dompdf/blob/master/LICENSE.LGPL
 *  ============================================================================== 
 */

require_once APPPATH . "third_party/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

class Pdf extends DOMPDF
{
    public function __construct() {
        parent::__construct();
    }

}
