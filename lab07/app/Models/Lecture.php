<?php

namespace Scheduler\Models;

class Lecture extends SemesterClass {

	public function getFormName(): string {
		return "wykład";
	}
	public function getColor(): string {
		return "DarkBlue";
	}

}
