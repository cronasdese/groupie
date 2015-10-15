<?php

class Home_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}


	function addComment($ID,$commentcont,$commentd){
		$data = array(
			'ID' => $ID,
			'comment_content' => $commentcont,
			'comment_date' => $commentd
			);

		$this->db->insert('comments',$data);
	}

	function showPost($account_id){
		$query = $this->db->query('SELECT * from posts INNER JOIN groups ON groups.group_id = posts.group_ID INNER JOIN accounts ON accounts.ID = groups.ID WHERE accounts.ID = "'.$account_id.'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function showComment($post_id){
		$query = $this->db->query('SELECT * FROM comments INNER JOIN posts ON posts.post_id = comments.post_id WHERE comments.post_id = "'. $post_id .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function searchGroup(){
		$query = $this->db->query('SELECT * FROM groups WHERE (group_ID LIKE "%'.$search.'%") OR (group_name LIKE "%'.$search.'%") ORDER BY group_name');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}