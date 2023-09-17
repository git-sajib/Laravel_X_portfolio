<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome()
        {
        $skills = SkillResource::collection(Skill::all());
        $projects = SkillResource::collection(Project::with('skill')->get());

        return Inertia::render('Welcome', compact('skills', 'projects'));
        }
}
