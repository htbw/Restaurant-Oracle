<?php
/**
 * View for the logout page.
 * 
 * @author Henry Baba-Weiss <htw@cs.washington.edu>
 */

set_include_path(get_include_path() . PATH_SEPARATOR . '../');

// File should never be requested directly
if (basename(getcwd()) == basename(dirname(__FILE__)))
{
	include('404.shtml');
	die();
}

//-----------------------------------------------------------------------------
// Functions
//-----------------------------------------------------------------------------

/**
 * Generates the page body for this page.
 *
 * @param array $data Data for the page.
 */
function page_body($data = null)
{
?>
			<p>You are now logged out.</p>
<?php
}
?>
