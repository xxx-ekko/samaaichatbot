<?php
//ChatbotController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse;
use Gemini\Laravel\Facades\Gemini;

class ChatbotController extends Controller
{
    public function repondre(Request $request)
    {
        $question = $request->input('question');
        $reponse = Reponse::where('question', $question)->first();

        if ($reponse) {
            return response()->json(['reponse' => $reponse->reponse]);
        } else {
            $result = Gemini::geminiPro()->generateContent($question);
            $addreponse = new Reponse;
            $addreponse->reponse = $result->text();
            $addreponse->question = $question;
            $addreponse->save();
            return response()->json(['reponse' => $result->text()]);
        }
    }
    public function index()
    {
        // Récupérer le prénom et le nom de l'utilisateur depuis la session
        $prenomNom = session('prenom_nom', ''); // Fournit une valeur par défaut

        // Limiter à 4 questions
        $questions = Reponse::limit(4)->get();

        return view('welcome', compact('questions', 'prenomNom')); // Passer les variables à la vue
    }
}
