<?php
	class shell_exec
	{
		private $string;
		private $type;
		private $action;
		private $net;
		private $position;
		private $output;
		public function ini_set($string, $type, $action, $net) 
		{
			$this->string = $string;
			$this->type = $type;
			$this->action = $action;
			$this->net = $net;
			$this->position = NULL;
			if(self::catch()) 
			{
				$output = self::catch();
				$this->output = $output;
				return $this->output;
			} 
			else 
			{
				return false; 
			}
		}
		private function catch() 
		{
			if( $this->action == 1 ) 
			{
				$FBIT=NULL;
				$POSITION=NULL;
				$STRLEN=STRLEN($this->string);
				FOREACH(STR_SPLIT($this->string) as $BIT)
				{
					FOREACH(STR_SPLIT($this->net) as $_NO => $_BIT)
					{
						IF($_BIT==$BIT)
						{
							$POSITION.=$_NO;
							$FBIT.=strlen($_NO);
						}
					}
				}
				$this->position = $POSITION;
				$this->fbit = $FBIT;
				
				if($this->type == 0)
				{
					$output=$this->position.'000'.$this->fbit;
				}
				elseif($this->type == 1)
				{
					$output=$this->position;
				}
				elseif($this->type == 2)
				{
					$output=$this->fbit;
				}
			}
			elseif(( $this->action == 0 )&&($this->type == 0))
			{
				$_SIEC =$this->net;
				$_strlen_liczb=stristr($this->string,'000');
				$_sliczby=str_replace('0','',$_strlen_liczb);
				$xxx='000'.$_strlen_liczb;
				$_liczby=str_replace($xxx,'',$this->string);
				$_CHARACTERS=NULL;
				$noxe=null;
				$_liczbyxv=null;
				$_splxx1=str_split($_sliczby);
				foreach($_splxx1 as $noxs)
				{
					
						$noxe+=$noxs;
						$noxy=$noxe-$noxs;
						$_liczbyxv= substr($_liczby, $noxy, $noxs);	
						if((isset($_SIEC[intval($_liczbyxv)]))&&($_SIEC[intval($_liczbyxv)]!==false))
						{
							$_CHARACTERS.= $_SIEC[intval($_liczbyxv)];
						}
						else
						{
							$_CHARACTERS=false;
						}
						
				}
				$output= $_CHARACTERS;
			}
			else
			{
				$output = false;
			}
			return $output;
		}
	}
?>
