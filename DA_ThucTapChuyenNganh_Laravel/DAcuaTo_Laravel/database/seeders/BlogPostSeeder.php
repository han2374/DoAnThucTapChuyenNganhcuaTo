<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'title' => "Nghệ Thuật Tuyển Chọn: Tại Sao Video 'Đúng' Lại Quan Trọng Hơn Video 'Nhiều View'",
                'excerpt' => 'Trong biển thông tin khổng lồ của YouTube, việc tìm được nội dung thực sự truyền cảm hứng là một thử thách...',
                'content' => '<p>Trong biển thông tin khổng lồ của YouTube, việc tìm được nội dung thực sự truyền cảm hứng là một thử thách. Chúng tôi chia sẻ cách chúng tôi bộ lọc những video chất lượng nhất để giúp bạn tiết kiệm thời gian và tối ưu hóa trải nghiệm xem.</p>',
                'published_at' => Carbon::parse('2025-12-26'),
                'comments' => 8,
            ],
            [
                'title' => 'Biến Lượt Xem Thành Đơn Hàng: Cách Chọn Video YouTube Để Tư Vấn Bán Hàng Hiệu Quả.',
                'excerpt' => 'Không phải video nào bạn thích cũng mang lại doanh số. Khám phá công thức lựa chọn video...',
                'content' => '<p>Không phải video nào bạn thích cũng mang lại doanh số. Khám phá công thức lựa chọn video dựa trên tâm lý khách hàng và cách lồng ghép tư vấn sản phẩm khéo léo để tăng tỷ lệ chuyển đổi ngay lập tức.</p>',
                'published_at' => Carbon::parse('2025-12-24'),
                'comments' => 12,
            ],
            // add a couple more
        ];

        foreach($items as $it){
            BlogPost::create([
                'title' => $it['title'],
                'slug' => Str::slug($it['title']).'-'.Str::random(5),
                'excerpt' => $it['excerpt'] ?? null,
                'content' => $it['content'] ?? null,
                'published_at' => $it['published_at'] ?? now(),
                'comments' => $it['comments'] ?? 0,
            ]);
        }
    }
}
