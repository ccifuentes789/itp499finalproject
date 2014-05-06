<?php 
class UserList{
    public static function search(){

        /*SELECT title, artist_name, DATE_FORMAT(added, '%b %d %Y %h:%i %p') AS added
            FROM songs
        INNER JOIN artists
        ON songs.artist_id = artists.id
         */
        $query = DB::table('users')
            ->select('username', 'admin', 'password', 'rating', 'userID', 'movietitle')
            ->join('ratings', 'users.rating_id', '=', 'ratings.id');



        $accounts = $query->get();

        return $accounts;
    }

    public static function verifyUser($username, $password){

        /*SELECT title, artist_name, DATE_FORMAT(added, '%b %d %Y %h:%i %p') AS added
            FROM songs
        INNER JOIN artists
        ON songs.artist_id = artists.id
         */
        $found = false;
        $query = DB::table('users')
            ->select('username', 'admin', 'password', 'userID', 'rating', 'movietitle')
            ->join('ratings', 'users.rating_id', '=', 'ratings.id');


        $accounts = $query->get();
        //dd($accounts);
        foreach($accounts as $account){
            if($account->username == $username && $account->password == $password && $account->admin == 1){
               //die("found");
                $found = true;
            }
            if($account->username == $username && $account->password == $password && $account->admin == ""){
               //die("found");
                $found = true;
                header("Location: usersOnly?user=$username&id=$account->userID");
                exit();
            }

        }

        if(!$found){
            header("Location: login");
        }
       
        //die($found);
        return $found;
        
        
    }

     public static function addUser($username, $password){



        $query = DB::table('users')
            ->insertGetId(
                array('username' => "$username", 'password' => "$password", 'admin' => '0', 'movietitle' => 'N/A', 'rating_id' => '4')
                );
        //dd($query);
        //$added = $query->get();

        return $query;
    }
    public static function editUser($username, $password, $rating_id, $movietitle, $id){
        $query = DB::table('users')
            ->where('userID', $id)
            ->update(
                array('username' => "$username", 'password' => "$password",  'movietitle' => "$movietitle", 'rating_id' => "$rating_id")
                );
        //dd($query);
        //$added = $query->get();

        return $query;
    }

    public static function removeUser($id){
     

        $query = DB::table('users')
            ->where('userID', '=', "$id")
            ->delete();
        //dd($query);
        //$added = $query->get();

        return $query;
    }

}


?>