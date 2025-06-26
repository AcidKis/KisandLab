<?
namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'short_description' => $this->faker->paragraph,
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'views' => $this->faker->numberBetween(0, 1000),
            'content' => $this->faker->text(500),
            'user_id' => 1, // Убедитесь, что ID пользователя существует
            'comments_count' => $this->faker->numberBetween(0, 100)
        ];
    }
}