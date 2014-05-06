<?php

class LoginController extends BaseController{
	public function search(){
        return View::make('login');
    }

    public function verifyLogin(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');

        // dd($artist);
        $songs = Login::verify($username, $password);
        /*
        var_dump($songs);
        die();*/
        // dd($songs);//equivalent to above commented code: dumb and die
        return View::make('rottentomatoes/search');
    }

    public  function listUsers(){

        $accounts = UserList::search();
        //dd($accounts);
        return View::make('user-list', [
            'accounts' =>$accounts
        ]);
    }

 

    public  function listUsersOnly(){
        $username = Input::get('user');
        $id = Input::get('id');
        //die($username . "and " . $id);
        Session::put('username', $username);
        Session::put('userID', $id);
        $accounts = UserList::search();
        //dd($accounts);
        return View::make('user-list-only', [
            'accounts' =>$accounts
        ]);
    }

    public  function displayUsersAgain(){
       
        $accounts = UserList::search();
        //dd($accounts);
        return View::make('user-list-only', [
            'accounts' =>$accounts
        ]);
    }

    public  function loginUser(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');

         if(empty($username) || empty($password)){
            die("Fill in all fields");
        }
        //dd("$username and $password");
        $found = UserList::verifyUser($username, $password);
        //dd($accounts);
        if($found==true){
 
         /*   return View::make('user-list', [
                'accounts' =>$accounts
            ]);*/
        //echo "<a href='userlist'> Go to User List </a>";
        Session::put('adminname', $username);

        return Redirect::to('userlist');
        }
        else{
            die("Login Incorrect");
        }
    }

    public  function addUser(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');

          if(empty($username) || empty($password)){
            die("Fill in all fields");
        }
        //dd("$username and $password");
        $query = UserList::addUser($username, $password);
        //dd($accounts);

        
        if($query==true){

            header('Location: userlist');
            exit();
        }
        else{
            die("Add Unsuccessful");
        }
    }

    public  function signUp(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');

          if(empty($username) || empty($password)){
            die("Fill in all fields");
        }
        //dd("$username and $password");
        $query = UserList::addUser($username, $password);
        //dd($accounts);

        
        if($query==true){

            header('Location: login');
            exit();
        }
        else{
            die("Add Unsuccessful");
        }
    }


    public  function editUser(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');
        $id = Input::get('id');
        $movietitle = Input::get('movietitle');
        $rating = Input::get('rating');

        if(empty($username) || empty($password) || empty($id) || empty($rating)){
            die("Fill in all fields");
        }
        //dd("$username and $password");
        $found = UserList::editUser($username, $password, $rating, $movietitle, $id);
        //dd($accounts);
        if($found==true){
            header('Location: userlist');
            exit();
        }
        else{
            die("Edit Unsuccessful");
        }
    }

    public  function editUserOnly(){
        $username = Input::get('user'); //$_GET['song_title']
        $password = Input::get('password');
        $id = Input::get('id');
        $movietitle = Input::get('movietitle');
        $rating = Input::get('rating');

        if(empty($username) || empty($password) || empty($id) || empty($rating)){
            die("Fill in all fields");
        }
        //dd("$username and $password");
        $found = UserList::editUser($username, $password, $rating, $movietitle, $id);
        //dd($accounts);
        //if($found==true){
            header('Location: displayUsersAgain');
            exit();
        //}
        /*else{
            die("Edit Unsuccessful");
        }*/
    }

     public  function removeUser(){

        $id = Input::get('id');


        //dd("$username and $password");
        $found = UserList::removeUser($id);
        //dd($accounts);
        if($found==true){
            header('Location: userlist');
            exit();
        }
        else{
            die("Edit Unsuccessful");
        }
    }

    public  function logout(){

        Session::regenerate();
        Session::flush();
        return Redirect::to('login');
    }

}


?>