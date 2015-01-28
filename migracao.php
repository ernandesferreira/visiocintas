<h1> Migra&ccedil;&atilde;o </h1>

<?php 

include_once 'wp-config.php';

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
$db = mysql_select_db(DB_NAME) or die(mysql_error());

if(isset($_POST['url_antiga']) && isset($_POST['url_nova'])){

	if (strlen($_POST['url_antiga']) < 5 || strlen($_POST['url_antiga']) < 5){

		echo "URL Inv&aacute;lida!";
		return false;

	} 

global $wpdb;

$searchString = str_replace('http://', '', $_POST['url_antiga']);
$novaURL = str_replace('http://', '', $_POST['url_nova']);

$searchString = str_replace('www.', '', $searchString);
$novaURL = str_replace('www.', '', $novaURL);



// Mudar URL do site
if( $_POST['checkoption'] == 's' ){
	$wpdb->query("UPDATE {$wpdb->options} set option_value='http://{$novaURL}' where option_name='siteurl'");
	$wpdb->query("UPDATE {$wpdb->options} set option_value='http://{$novaURL}' where option_name='home'");
}

$query = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE guid LIKE '%{$searchString}%'");
echo count($query)." post meta encontrado(s)<hr />";
echo $wpdb->posts;
echo "<br><br><br>";

//Atualizar referencias de imagens e links nos posts
$update = mysql_query("UPDATE {$wpdb->posts} SET post_content = replace(post_content, '{$searchString}','{$novaURL}')");
$update2 = mysql_query("UPDATE {$wpdb->posts} SET guid = replace(guid,'{$searchString}','{$novaURL}')") or die(mysql_error());








class st2Class {

		    public function __construct($obj) {

		    	$keys = get_object_vars($obj);
		    	foreach ($keys as $key => $value) {

		    		if($key != 'url'){
		    			$this->$key = str_replace('{$searchString}', '{$novaURL}', $obj->$key);
		    		}else{
		    			$this->$key =  $obj->$key;
		    		}
		    	}
		        

		    }
		}

//Post Meta
$query = $wpdb->get_results("SELECT * FROM {$wpdb->postmeta} WHERE meta_value LIKE '%{$searchString}%'");
echo count($query)." post meta encontrado(s)<hr />";

foreach ($query as $key => $q1) {
	
	$q2 = get_post_meta($q1->post_id,$q1->meta_key,true);

	if(is_array($q2)){


		$Arraykey = array_search($searchString, $q2);

		$q2[$Arraykey] = $novaURL;

	} 
	else if(is_object($q2)){

		$q2 = new st2Class($q2);	


	} else {

		$q2 = str_replace($searchString, $novaURL, $q2);

	}

	update_post_meta($q1->post_id,$q1->meta_key,$q2);

	echo '<pre>'.print_r($q2, true).'</pre>';

	ob_flush();
}


// Comment Meta
$query2 = $wpdb->get_results("SELECT * FROM {$wpdb->commentmeta} WHERE meta_value LIKE '%{$searchString}%'");
echo count($query2)." comment meta encontrado(s)<hr />";

foreach ($query2 as $key => $q1) {
	
	$q2 = get_comment_meta($q1->comment_id,$q1->meta_key,true);

	if(is_array($q2)){

		$Arraykey = array_search($searchString, $q2);

		$q2[$Arraykey] = $novaURL;

	} 
	else if(is_object($q2)){

		$q2 = new st2Class($q2);	


	}else {

		$q2 = str_replace($searchString, $novaURL, $q2);

	}

	update_comment_meta($q1->comment_id,$q1->meta_key,$q2);
	echo '<pre>'.print_r($q2, true).'</pre>';

	ob_flush();
}


// Options
$query2 = $wpdb->get_results("SELECT * FROM {$wpdb->options} WHERE option_value LIKE '%{$searchString}%'");
echo count($query2)." option(s) encontrado(s)<hr />";

foreach ($query2 as $key => $q1) {
	
	$q2 = get_option($q1->option_name);

	if(is_array($q2)){

		$Arraykey = array_search($searchString, $q2);

		$q2[$Arraykey] = $novaURL;

	} 
	else if(is_object($q2)){

		$q2 = new st2Class($q2);	


	}else {

		$q2 = str_replace($searchString, $novaURL, $q2);

	}

	update_option($q1->option_name,$q2);
	echo '<pre>'.print_r($q2, true).'</pre>';

	ob_flush();
}


if($wpdb->revslider_slides){
	// Slide
	$wpdb->query("UPDATE {$wpdb->revslider_slides} set params = replace('params', '{$searchString}', '{$novaURL}')");

}


$wpdb->query("UPDATE {$wpdb->postmeta} set meta_value = replace(meta_value, 'st2Class', 'stdClass')");

$wpdb->query("UPDATE {$wpdb->commentmeta} set meta_value = replace(meta_value, 'st2Class', 'stdClass')");

$wpdb->query("UPDATE {$wpdb->options} set option_value = replace(option_value, 'st2Class', 'stdClass')");


}
?>


<form name="migracao" method="post">


<label>URL Antiga:</label>
<input type="text" name="url_antiga" />

<br><br>

<label>URL Nova:</label>
<input type="text" name="url_nova" />
<br><br>
<labe>Marque caso deseje Atualizar Options? </labe>
<input type="checkbox" name="checkoption" value="s">
<br><br>
<input type="submit" name="migrar" value="Migrar">


</form>