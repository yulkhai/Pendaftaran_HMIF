<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post dialiaskan dengan class menolong
 * @package App\Models
 * @mixin Model
 * 
 */
class Post extends Model
{
    use HasFactory;

    // Fields
    private $id;
    private $nim;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    /**
     * @param Unused
     * @return Array<int, string> Meretrieve semua data dari tabel posts
     */
    public function getPosts(){
        return $this->all();
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Sebuah Method untuk menambahkan data ke tabel posts
     * @param $user_id, $request_id
     * @return nothing (void)
     */
    public function addPost($nim){
        $this->nim = $nim;
        $this->save();
    }   

    /**
     * Sebuah Method untuk menghapus data dari tabel posts
     * 
     */
    public function deletePost($id){
        $this->where('id', $id)->delete();
    }
    
    


   
}
