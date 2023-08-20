<?php declare(strict_types=1);

namespace App\Command;

use App\Action\CleanRawAction;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class CleanRawCommand extends Command
{
	/**
	 * @inheritDoc
	 */
	protected function execute (InputInterface $input, OutputInterface $output) : int
	{
		$io = new SymfonyStyle($input, $output);
		$io->title("Photos: clean RAWs");

		$action = new CleanRawAction();
		return $action->cleanRawFiles($io, \getcwd())
			? 0
			: 1;
	}
}
