<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// SỬA LỖI: Tên Model phải viết hoa
class issue extends Model
{
    use HasFactory;

    // Tên bảng (Không bắt buộc nếu bạn đặt là 'issues')
    // protected $table = 'issues'; 

    /**
     * The attributes that are mass assignable.
     * CÁC CỘT CÓ THỂ ĐIỀN ĐƯỢC
     * Dựa trên Migration (computer_id, reported_by, reported_date, description, urgency, status)
     */
    protected $fillable = [
        'computer_id',
        'reported_by',
        'reported_date',
        'description',
        'urgency',
        'status',
    ];

    /**
     * The attributes that should be cast.
     * ÉP KIỂU DỮ LIỆU
     */
    protected $casts = [
        'reported_date' => 'datetime', // Ép kiểu cột DATETIME thành đối tượng Carbon của PHP
    ];


    // -------------------------------------------------------------------
    // MỐI QUAN HỆ (RELATIONSHIPS)
    // -------------------------------------------------------------------

    /**
     * Issue thuộc về một Computer
     * Liên kết khóa ngoại computer_id
     */
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
