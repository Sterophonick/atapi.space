/////////////////////////////////////////////////////////////////////////////////
// File:     	agb_lib.h                                                	   //
// Description: Contains all the GBA register definitions, and many functions. //
// Author:      imadog54                                                       //
// Date:        29th August 2016                                               //
/////////////////////////////////////////////////////////////////////////////////

//Use this file often if you're a beginner, even a pro, as it makes GBA development easier, like any other lib. Edit this if you want.

#include <stdio.h>
#include <stdlib.h>

typedef unsigned char u8;
typedef unsigned short u16;
typedef unsigned long u32;

typedef volatile unsigned char vu8;
typedef volatile unsigned short vu16;
typedef volatile unsigned long vu32;

typedef volatile signed char vs8;
typedef volatile signed short vs16;
typedef volatile signed long vs32;

typedef const signed char cs8;
typedef const signed short cs16;
typedef const signed long cs32;

typedef const volatile signed char cvs8;
typedef const volatile signed short cvs16;
typedef const volatile signed long cvs32;

typedef const volatile unsigned char cvu8;
typedef const volatile unsigned short cvu16;
typedef const volatile unsigned long cvu32;

typedef const signed char cu8;
typedef const signed short cu16;
typedef const signed long cu32;

typedef signed char s8;
typedef signed short s16;
typedef signed long s32;

typedef unsigned char byte;
typedef unsigned short hword;
typedef unsigned long word;
typedef void (*fp)(void);

typedef float int8;
typedef double int16;
typedef volatile int vint; 
typedef volatile double vint16;
typedef volatile float vint8;

typedef unsigned int uint;

u32* OAMmem  		=(u32*)0x7000000;
u16* VideoBuffer 	=(u16*)0x6000000;
u16* OAMData		=(u16*)0x6010000;
u16* BGPaletteMem 	=(u16*)0x5000000;
u16* OBJPaletteMem 	=(u16*)0x5000200;
u16* BGTileMem = (u16*)0x6004000;
u8 *Cartridge = (char *)0x8000000;
u8 *internalname = (char *)0x80000A0;
unsigned short *v_buffer;    // this is the buffer adress
int vframe = 1;              // this is the buffer frame
int	offsetOAM = 0;

u16* OAM = (u16*)0x7000000;
int loop;

u16* FrontBuffer = (u16*)0x6000000;
u16* BackBuffer = (u16*)0x600A000;
u16* videoBuffer;
u16* paletteMem = (u16*)0x5000000;
volatile u16* ScanlineCounter = (u16*)0x4000006;
u32* Memory = (u32*)0x0000000;

//gates
#define NOT  !
#define AND  &&
#define NOR  !|
#define OR   |
#define NAND !&
#define XOR  ^
#define XNOR !^

#define us   (void*)

# define   MAX_SPRITES   128

#define SOFT_RESET return 0;

#define REG_SOUNDCNT1_H  *(volatile unsigned short *) 0x04000082
#define REG_SOUNDCNT1_X  *(volatile unsigned short *) 0x04000084
#define REG_SD1SAD      *(volatile unsigned long  *) 0x040000BC
#define REG_SD1DAD      *(volatile unsigned long  *) 0x040000C0
#define REG_SD1CNT_H    *(volatile unsigned short *) 0x040000C6
#define REG_TM0SD        *(volatile unsigned short *) 0x04000100
#define REG_TMSDCNT      *(volatile unsigned short *) 0x04000102 

//colors
#define WHITE 0xFFFF
#define RED 0x001F
#define BLUE 0x7C00
#define CYAN 0x7FE0
#define GREEN 0x03E0
#define MAGENTA 0x7c1f
#define BROWN 0x0110
#define BLACK 0x0000
#define BRICK 0x011B
#define PINK 0x7EDD
#define ORANGE 0x029F
#define YELLOW 0x03FF
#define GREY 0x4210

//registries
#define SetMode(mode) REG_DISPCNT = (mode) 

#define MULTIBOOT const int __gba_multiboot; //Type 'MULTIBOOT' at the beginning of a project, and the file will be compiled as a multiboot ROM.

#define W 1
#define BIT00 1
#define BIT01 2
#define BIT02 4
#define BIT03 8
#define BIT04 16
#define BIT05 32
#define BIT06 64
#define BIT07 128
#define BIT08 256
#define BIT09 512
#define BIT10 1024
#define BIT11 2048
#define BIT12 4096
#define BIT13 8192
#define BIT14 16384
#define BIT15 32768

#define TMR_PRESCALER_1CK       0x0000  // Prescaler 1 Clock
#define TMR_PRESCALER_64CK      0x0001  //            64 clocks
#define TMR_PRESCALER_256CK     0x0002  //          256 clocks
#define TMR_PRESCALER_1024CK    0x0003  //        1024 clocks
#define TMR_IF_ENABLE           0x0040  // Interrupt Request Enable
#define TMR_ENABLE              0x0080  // Run Timer

#define REG_TM0D       *(vu16*) 0x04000100

#define INT_VBLANK 0x0001
#define INT_HBLANK 0x0002
#define INT_VCOUNT 0x0004 //you can set the display to generate an interrupt when it reaches a particular line on the screen
#define INT_TIMER0 0x0008
#define INT_TIMER1 0x0010
#define INT_TIMER2 0x0020
#define INT_TIMER3 0x0040
#define INT_COMUNICATION 0x0080 //serial communication interupt
#define INT_DMA0 0x0100
#define INT_DMA1 0x0200
#define INT_DMA2 0x0400
#define INT_DMA3 0x0800
#define INT_KEYBOARD 0x1000
#define INT_CART 0x2000 //the cart can actually generate an interupt
#define INT_ALL 0x4000 //this is just a flag we can set to allow the my function to enable or disable all interrupts. Doesn't actually correspond to a bit in REG_IE

#define SOUNDINIT			0x8000	// makes the sound restart
#define SOUNDDUTY87			0x0000	//87.5% wave duty
#define SOUNDDUTY75			0x0040	//75% wave duty
#define SOUNDDUTY50			0x0080	//50% wave duty
#define SOUNDDUTY25			0x00C0	//25% wave duty

#define SOUND1PLAYONCE		0x4000	// play sound once
#define SOUND1PLAYLOOP		0x0000	// play sound looped
#define SOUND1INIT			0x8000	// makes the sound restart
#define SOUND1SWEEPSHIFTS(n)	n	// number of sweep shifts (0-7)
#define SOUND1SWEEPINC		0x0000	// sweep add (freq increase)
#define SOUND1SWEEPDEC		0x0008	// sweep dec (freq decrese)
#define SOUND1SWEEPTIME(n)	(n<<4)	// time of sweep (0-7)
#define SOUND1ENVSTEPS(n)	(n<<8)	// envelope steps (0-7)
#define SOUND1ENVINC		0x0800	// envellope increase
#define SOUND1ENVDEC		0x0000	// envellope decrease
#define SOUND1ENVINIT(n)	(n<<12) // initial envelope volume (0-15)


#define SOUND2PLAYONCE		0x4000	// play sound once
#define SOUND2PLAYLOOP		0x0000	// play sound looped
#define SOUND2INIT			0x8000	// makes the sound restart
#define SOUND2ENVSTEPS(n)	(n<<8)	// envelope steps (0-7)
#define SOUND2ENVINC		0x0800	// envellope increase
#define SOUND2ENVDEC		0x0000	// envellope decrease
#define SOUND2ENVINIT(n)	(n<<12) // initial envelope volume (0-15)



#define SOUND3BANK32		0x0000	// Use two banks of 32 steps each
#define SOUND3BANK64		0x0020	// Use one bank of 64 steps
#define SOUND3SETBANK0		0x0000	// Bank to play 0 or 1 (non set bank is written to)
#define SOUND3SETBANK1		0x0040
#define SOUND3PLAY			0x0080	// Output sound

#define SOUND3OUTPUT0		0x0000	// Mute output
#define SOUND3OUTPUT1		0x2000	// Output unmodified
#define SOUND3OUTPUT12		0x4000	// Output 1/2 
#define SOUND3OUTPUT14		0x6000	// Output 1/4 
#define SOUND3OUTPUT34		0x8000  // Output 3/4

#define SOUND3PLAYONCE		0x4000	// Play sound once
#define SOUND3PLAYLOOP		0x0000	// Play sound looped
#define SOUND3INIT			0x8000	// Makes the sound restart


#define SOUND4PLAYONCE		0x4000	// play sound once
#define SOUND4PLAYLOOP		0x0000	// play sound looped
#define SOUND4INIT			0x8000	// makes the sound restart
#define SOUND4ENVSTEPS(n)	(n<<8)	// envelope steps (0-7)
#define SOUND4ENVINC		0x0800	// envellope increase
#define SOUND4ENVDEC		0x0000	// envellope decrease
#define SOUND4ENVINIT(n)	(n<<12) // initial envelope volume (0-15)


#define SOUND4STEPS7		0x0004
#define SOUND4STEPS15		0x0000
#define SOUND4PLAYONCE		0x4000
#define SOUND4PLAYLOOP		0x0000
#define SOUND4INIT			0x8000

#define REG_INTERUPT   *(u32*)0x3007FFC		//Interrupt Register
#define REG_DISPCNT    *(u32*)0x4000000		//Display Control (Mode)
#define REG_DISPCNT_L  *(u16*)0x4000000		//???
#define REG_DISPCNT_H  *(u16*)0x4000002		//???
#define REG_DISPSTAT   *(u16*)0x4000004		//???
#define REG_VCOUNT     *(vu16*)0x4000006		//Vertical Control (Sync)
#define REG_BG0CNT     *(u16*)0x4000008		//Background 0
#define REG_BG1CNT     *(u16*)0x400000A		//Background 1
#define REG_BG2CNT     *(u16*)0x400000C		//Background 2
#define REG_BG3CNT     *(u16*)0x400000E		//Background 3
#define REG_BG0HOFS    *(u16*)0x4000010		//Background 0 Horizontal Offset
#define REG_BG0VOFS    *(u16*)0x4000012		//Background 0 Vertical Offset
#define REG_BG1HOFS    *(u16*)0x4000014		//Background 1 Horizontal Offset
#define REG_BG1VOFS    *(u16*)0x4000016		//Background 1 Vertical Offset
#define REG_BG2HOFS    *(u16*)0x4000018		//Background 2 Horizontal Offset
#define REG_BG2VOFS    *(u16*)0x400001A		//Background 2 Vertical Offset
#define REG_BG3HOFS    *(u16*)0x400001C		//Background 3 Horizontal Offset
#define REG_BG3VOFS    *(u16*)0x400001E		//Background 3 Vertical Offset
#define REG_BG2PA      *(u16*)0x4000020		//Background 2 PA Rotation (pa = x_scale * cos(angle);)
#define REG_BG2PB      *(u16*)0x4000022		//Background 2 PB Rotation (pb = y_scale * sin(angle);)
#define REG_BG2PC      *(u16*)0x4000024		//Background 2 PC Rotation (pc = x_scale * -sin(angle);)
#define REG_BG2PD      *(u16*)0x4000026		//Background 2 PD Rotation (pd = y_scale * cos(angle);)
#define REG_BG2X       *(u32*)0x4000028		//Background 2 X Location
#define REG_BG2X_L     *(u16*)0x4000028		//???
#define REG_BG2X_H     *(u16*)0x400002A		//???
#define REG_BG2Y       *(u32*)0x400002C		//Background 2 Y Location
#define REG_BG2Y_L     *(u16*)0x400002C		//???
#define REG_BG2Y_H     *(u16*)0x400002E		//???
#define REG_BG3PA      *(u16*)0x4000030		//Background 3 PA Rotation (pa = x_scale * cos(angle);)
#define REG_BG3PB      *(u16*)0x4000032		//Background 3 PB Rotation (pb = y_scale * sin(angle);)
#define REG_BG3PC      *(u16*)0x4000034		//Background 3 PC Rotation (pc = x_scale * -sin(angle);)
#define REG_BG3PD      *(u16*)0x4000036		//Background 3 PD Rotation (pd = y_scale * cos(angle);)
#define REG_BG3X       *(u32*)0x4000038		//Background 3 X Location
#define REG_BG3X_L     *(u16*)0x4000038		//???
#define REG_BG3X_H     *(u16*)0x400003A		//???
#define REG_BG3Y       *(u32*)0x400003C		//Background 3 Y Location
#define REG_BG3Y_L     *(u16*)0x400003C		//???
#define REG_BG3Y_H     *(u16*)0x400003E		//???
#define REG_WIN0H      *(u16*)0x4000040		//Window 0 X coords (bits 0-7 right, bits 8-16 left)
#define REG_WIN1H      *(u16*)0x4000042		//Window 1 X coords (bits 0-7 right, bits 8-16 left)
#define REG_WIN0V      *(u16*)0x4000044		//Window 0 Y coords (bits 0-7 bottom, bits 8-16 top)
#define REG_WIN1V      *(u16*)0x4000046		//Window 1 Y coords (bits 0-7 bottom, bits 8-16 top)
#define REG_WININ      *(u16*)0x4000048		//Inside Window Settings
#define REG_WINOUT     *(u16*)0x400004A		//Outside Window Settings
#define REG_MOSAIC     *(u32*)0x400004C		//Mosaic Mode
#define REG_MOSAIC_L   *(u32*)0x400004C		//???
#define REG_MOSAIC_H   *(u32*)0x400004E		//???
#define REG_BLDMOD     *(u16*)0x4000050		//Blend Mode
#define REG_COLEV      *(u16*)0x4000052		//???
#define REG_COLEY      *(u16*)0x4000054		//???

#define REG_SOUND1CNT   *(vu32*)0x4000060	//sound 1
#define REG_SOUND1CNT_L *(vu16*)0x4000060	//
#define REG_SOUND1CNT_H *(vu16*)0x4000062	//
#define REG_SOUND1CNT_X *(vu16*)0x4000064	//

#define REG_SOUND2CNT_L *(vu16*)0x4000068		//sound 2 lenght & wave duty
#define REG_SOUND2CNT_H *(vu16*)0x400006C		//sound 2 frequency+loop+reset

#define REG_SG30       *(vu32*)0x4000070		//???
#define REG_SOUND3CNT  *(vu32*)0x4000070		//???
#define REG_SG30_L     *(vu16*)0x4000070		//???
#define REG_SOUND3CNT_L *(vu16*)0x4000070	//???
#define REG_SG30_H     *(vu16*)0x4000072		//???
#define REG_SOUND3CNT_H *(vu16*)0x4000072	//???
#define REG_SG31       *(vu16*)0x4000074		//???
#define REG_SOUND3CNT_X *(vu16*)0x4000074	//???

#define REG_SOUND4CNT_L *(vu16*)0x4000078		//???
#define REG_SOUND4CNT_H *(vu16*)0x400007C		//???

#define REG_SGCNT0     *(vu32*)0x4000080		
#define REG_SGCNT0_L   *(vu16*)0x4000080		
#define REG_SOUNDCNT   *(vu32*)0x4000080
#define REG_SOUNDCNT_L *(vu16*)0x4000080		//DMG sound control

#define REG_SGCNT0_H   *(vu16*)0x4000082		
#define REG_SOUNDCNT_H *(vu16*)0x4000082		//Direct sound control

#define REG_SGCNT1     *(vu16*)0x4000084		
#define REG_SOUNDCNT_X *(vu16*)0x4000084	    //Extended sound control

#define REG_SGBIAS     *(vu16*)0x4000088		
#define REG_SOUNDBIAS  *(vu16*)0x4000088		//bit rate+sound bias

#define REG_WAVE_RAM0  *(vu32*)0x4000090		//???
#define REG_SGWR0_L    *(vu16*)0x4000090		//???
#define REG_SGWR0_H    *(vu16*)0x4000092		//???
#define REG_WAVE_RAM1  *(vu32*)0x4000094		//???
#define REG_SGWR1_L    *(vu16*)0x4000094		//???
#define REG_SGWR1_H    *(vu16*)0x4000096		//???
#define REG_WAVE_RAM2  *(vu32*)0x4000098		//???
#define REG_SGWR2_L    *(vu16*)0x4000098		//???
#define REG_SGWR2_H    *(vu16*)0x400009A		//???
#define REG_WAVE_RAM3  *(vu32*)0x400009C		//???
#define REG_SGWR3_L    *(vu16*)0x400009C		//???
#define REG_SGWR3_H    *(vu16*)0x400009E		//???

#define REG_SGFIFOA    *(vu32*)0x40000A0		//???
#define REG_SGFIFOA_L  *(vu16*)0x40000A0		//???
#define REG_SGFIFOA_H  *(vu16*)0x40000A2		//???
#define REG_SGFIFOB    *(vu32*)0x40000A4		//???
#define REG_SGFIFOB_L  *(vu16*)0x40000A4		//???
#define REG_SGFIFOB_H  *(vu16*)0x40000A6		//???
#define REG_DM0SAD     *(u32*)0x40000B0	//DMA0 Source Address
#define REG_DM0SAD_L   *(u16*)0x40000B0	//DMA0 Source Address Low Value
#define REG_DM0SAD_H   *(u16*)0x40000B2	//DMA0 Source Address High Value
#define REG_DM0DAD     *(u32*)0x40000B4	//DMA0 Destination Address
#define REG_DM0DAD_L   *(u16*)0x40000B4	//DMA0 Destination Address Low Value
#define REG_DM0DAD_H   *(u16*)0x40000B6	//DMA0 Destination Address High Value
#define REG_DM0CNT     *(u32*)0x40000B8	//DMA0 Control (Amount)
#define REG_DM0CNT_L   *(u16*)0x40000B8	//DMA0 Control Low Value
#define REG_DM0CNT_H   *(u16*)0x40000BA	//DMA0 Control High Value

#define REG_DM1SAD     *(u32*)0x40000BC	//DMA1 Source Address
#define REG_DM1SAD_L   *(u16*)0x40000BC	//DMA1 Source Address Low Value
#define REG_DM1SAD_H   *(u16*)0x40000BE	//DMA1 Source Address High Value
#define REG_DM1DAD     *(u32*)0x40000C0	//DMA1 Desination Address
#define REG_DM1DAD_L   *(u16*)0x40000C0	//DMA1 Destination Address Low Value
#define REG_DM1DAD_H   *(u16*)0x40000C2	//DMA1 Destination Address High Value
#define REG_DM1CNT     *(u32*)0x40000C4	//DMA1 Control (Amount)
#define REG_DM1CNT_L   *(u16*)0x40000C4	//DMA1 Control Low Value
#define REG_DM1CNT_H   *(u16*)0x40000C6	//DMA1 Control High Value

#define REG_DM2SAD     *(u32*)0x40000C8	//DMA2 Source Address
#define REG_DM2SAD_L   *(u16*)0x40000C8	//DMA2 Source Address Low Value
#define REG_DM2SAD_H   *(u16*)0x40000CA	//DMA2 Source Address High Value
#define REG_DM2DAD     *(u32*)0x40000CC	//DMA2 Destination Address
#define REG_DM2DAD_L   *(u16*)0x40000CC	//DMA2 Destination Address Low Value
#define REG_DM2DAD_H   *(u16*)0x40000CE	//DMA2 Destination Address High Value
#define REG_DM2CNT     *(u32*)0x40000D0	//DMA2 Control (Amount)
#define REG_DM2CNT_L   *(u16*)0x40000D0	//DMA2 Control Low Value
#define REG_DM2CNT_H   *(u16*)0x40000D2	//DMA2 Control High Value

#define REG_DM3SAD     *(u32*)0x40000D4	//DMA3 Source Address
#define REG_DM3SAD_L   *(u16*)0x40000D4	//DMA3 Source Address Low Value
#define REG_DM3SAD_H   *(u16*)0x40000D6	//DMA3 Source Address High Value
#define REG_DM3DAD     *(u32*)0x40000D8	//DMA3 Destination Address
#define REG_DM3DAD_L   *(u16*)0x40000D8	//DMA3 Destination Address Low Value
#define REG_DM3DAD_H   *(u16*)0x40000DA	//DMA3 Destination Address High Value
#define REG_DM3CNT     *(u32*)0x40000DC	//DMA3 Control (Amount)
#define REG_DM3CNT_L   *(u16*)0x40000DC	//DMA3 Control Low Value
#define REG_DM3CNT_H   *(u16*)0x40000DE	//DMA3 Control High Value

#define REG_TM0CNT      *(u32*)0x4000100	//Timer 0
#define REG_TM0CNT_L	*(u16*)0x4000100	//Timer 0 count value
#define REG_TM0CNT_H    *(u16*)0x4000102	//Timer 0 Control

#define REG_TM1CNT     *(u32*)0x4000104		//Timer 2
#define REG_TM1CNT_L   *(u16*)0x4000104		//Timer 2 count value
#define REG_TM1CNT_H   *(u16*)0x4000106		//Timer 2 control

#define REG_TM2D       *(u16*)0x4000108		//Timer 3?
#define REG_TM2CNT     *(u16*)0x400010A		//Timer 3 Control

#define REG_TM3D       *(u16*)0x400010C		//Timer 4?
#define REG_TM3CNT     *(u16*)0x400010E		//Timer 4 Control
#define DMA_ENABLE		0x80000000
#define DMA_IMMEDIATE	0x00000000

#define DMA_16			0x00000000
#define DMA_32			0x04000000
#define REG_SCD0       *(u16*)0x4000120		//32-bit Normal Serial Communication Data 0 / Multi-play
#define REG_SCD1       *(u16*)0x4000122		//32-bit Normal Serial Communication Data 1 /Multi-play
#define REG_SCD2       *(u16*)0x4000124		//Multi-play Communication Data 2
#define REG_SCD3       *(u16*)0x4000126		//Multi-play Communication Data 3
#define REG_SCCNT      *(u32*)0x4000128		//???
#define REG_SCCNT_L    *(u16*)0x4000128		//???
#define REG_SCCNT_H    *(u16*)0x400012A		//???
#define REG_P1         *(vu16*)0x4000130		//Player 1 Input
#define REG_KEYPAD     *(vu16*)0x4000130		//Player 1 Input
#define REG_P1CNT      *(vu16*)0x4000132		//Player 1 Input Interrupt Status
#define REG_R          *(u16*)0x4000134		//???
#define REG_HS_CTRL    *(u16*)0x4000140		//???
#define REG_JOYRE      *(u32*)0x4000150		//???
#define REG_JOYRE_L    *(u16*)0x4000150		//???
#define REG_JOYRE_H    *(u16*)0x4000152		//???
#define REG_JOYTR      *(u32*)0x4000154		//???
#define REG_JOYTR_L    *(u16*)0x4000154		//???
#define REG_JOYTR_H    *(u16*)0x4000156		//???
#define REG_JSTAT      *(u32*)0x4000158		//???
#define REG_JSTAT_L    *(u16*)0x4000158		//???
#define REG_JSTAT_H    *(u16*)0x400015A		//???
#define REG_IE         *(u16*)0x4000200		//Interrupt Enable
#define REG_IF         *(vu16*)0x4000202		//Interrupt Flags
#define REG_WSCNT      *(u16*)0x4000204		//???
#define REG_IME        *(u16*)0x4000208		//Interrupt Master Enable
#define REG_PAUSE      *(u16*)0x4000300		//Pause

#define MULTIBOOT_NCHILD 3              // Maximum number of slaves
#define MULTIBOOT_HEADER_SIZE 0xc0      // Header size
#define MULTIBOOT_SEND_SIZE_MIN 0x100   // Minimum transmission size
#define MULTIBOOT_SEND_SIZE_MAX 0x40000 // Maximum transmission size
#define MULTIBOOT_ERROR_04                0x04
#define MULTIBOOT_ERROR_08                0x08
#define MULTIBOOT_ERROR_0c                0x0c
#define MULTIBOOT_ERROR_40                0x40
#define MULTIBOOT_ERROR_44                0x44
#define MULTIBOOT_ERROR_48                0x48
#define MULTIBOOT_ERROR_4c                0x4c
#define MULTIBOOT_ERROR_80                0x80
#define MULTIBOOT_ERROR_84                0x84
#define MULTIBOOT_ERROR_88                0x88
#define MULTIBOOT_ERROR_8c                0x8c
#define MULTIBOOT_ERROR_NO_PROBE_TARGET   0x50
#define MULTIBOOT_ERROR_NO_DLREADY        0x60
#define MULTIBOOT_ERROR_BOOT_FAILURE      0x70
#define MULTIBOOT_ERROR_HANDSHAKE_FAILURE 0x71

#define MODE_0 0x0
#define MODE_1 0x1
#define MODE_2 0x2
#define MODE_3 0x3
#define MODE_4 0x4
#define MODE_5 0x5

#define BACKBUFFER 0x10
#define H_BLANK_OAM 0x20 

#define OBJ_MAP_2D 0x0
#define OBJ_MAP_1D 0x40

#define FORCE_BLANK 0x80 //Makes the screen white

#define BG0_ENABLE 0x100
#define BG1_ENABLE 0x200 
#define BG2_ENABLE 0x400
#define BG3_ENABLE 0x800
#define OBJ_ENABLE 0x1000 
#define BG_MOSAIC_ENABLE		0x40
#define MOS_BG_H(x)					(x)
#define MOS_BG_V(x)					(x<<4)
#define MOS_OBJ_H(x)				(x<<8)
#define MOS_OBJ_V(x)				(x<<12)

#define WIN1_ENABLE 0x2000 
#define WIN2_ENABLE 0x4000
#define WINOBJ_ENABLE 0x8000

#define  fixedfont_WIDTH   128
#define  fixedfont_HEIGHT  128
#define SET_MOSAIC(bh,bv,oh,ov)		REG_MOSAIC = ((bh)+(bv<<4)+(oh<<8)+(ov<<12))


#define RAND_MAX 32767

#define KEY_A 1
#define KEY_B 2
#define KEY_SELECT 4
#define KEY_START 8
#define KEY_RIGHT 16
#define KEY_LEFT 32
#define KEY_UP 64
#define KEY_DOWN 128
#define KEY_R 256
#define KEY_L 512
#define KEY_ALL 0x03FF

#define KEYS        *(volatile u16*)0x04000130

#define keyDown(k)  (~KEYS & k)
#define KEY_ANY_PRESSED (keyDown(KEY_A))OR(keyDown(KEY_B))OR(keyDown(KEY_L))OR(keyDown(KEY_R))OR(keyDown(KEY_SELECT))OR(keyDown(KEY_START))OR(keyDown(KEY_UP))OR(keyDown(KEY_DOWN))OR(keyDown(KEY_LEFT))OR(keyDown(KEY_RIGHT))

#define WIN_H(r, l)		(r | l<<8) //calculates REG_WINxH value, r=right coor, l=left coor
#define WIN_V(b, t)		(b | t<<8) //calculates REG_WINxV value, b=bottom coor, t=top coor

#define	IWRAM		0x03000000
#define	EWRAM		0x02000000
#define	EWRAM_END	0x02040000
#define	SRAM		0x0E000000
#define	REG_BASE	0x04000000
#define	VRAM		0x06000000
#define	REG_BLDALPHA	*((vu16 *)(REG_BASE + 0x52))
#define ROM    ((u8 *)0x08000000)   /* up to 32 megabytes */

/*Winodws*/
#define WIN0_ENABLE      0x2000 
#define WINOBJ_ENABLE    0x8000
#define RIGHT(n)    (n)
#define LEFT(n)     (n) << 8
#define BOTTOM(n)   (n)
#define TOP(n)      (n) << 8

// d?finition de l'int?rieur des fen?tres
#define WIN0_BG0      1
#define WIN0_BG1      2
#define WIN0_BG2      4
#define WIN0_BG3      8
#define WIN0_SPRITES  16
#define WIN0_BLENDS   32
#define WIN1_BG0      256
#define WIN1_BG1      512
#define WIN1_BG2      1024
#define WIN1_BG3      2048
#define WIN1_SPRITES  4096
#define WIN1_BLENDS   8192

// d?finition de l'ext?rieur des fen?tres
#define WINOUT_BG0        1
#define WINOUT_BG1        2
#define WINOUT_BG2        4
#define WINOUT_BG3        8
#define WINOUT_SPRITES    16
#define WINOUT_BLENDS     32
#define WINOBJ_BG0        256
#define WINOBJ_BG1        512
#define WINOBJ_BG2        1024
#define WINOBJ_BG3        2048
#define WINOBJ_SPRITES    4096
#define WINOBJ_BLENDS     8192

// rotations
#define PI                    3.14159
#define RADIAN(n)             (((float) n)/ (float) 180 * PI)

// attribut num?ro 0
#define ROTATION_FLAG         0x100
#define SIZE_DOUBLE           0x200
#define MODE_NORMAL           0x0
#define MODE_ALPHA            0x400
#define MODE_WINDOWED         0x800
#define MOSAIC                0x1000
#define COLOR_16              0x0000
#define COLOR_256             0x2000
#define SQUARE                0x0
#define WIDE                  0x4000
#define TALL                  0x8000

#define BLD_BG0			0x0001	//!< Blend bg 0
#define BLD_BG1			0x0002	//!< Blend bg 1
#define BLD_BG2			0x0004	//!< Blend bg 2
#define BLD_BG3			0x0008	//!< Blend bg 3
#define BLD_OBJ			0x0010	//!< Blend objects
#define BLD_ALL			0x001F	//!< All layers (except backdrop)
#define BLD_BACKDROP	0x0020	//!< Blend backdrop
#define BLD_OFF				 0	//!< Blend mode is off
#define BLD_STD			0x0040	//!< Normal alpha blend (with REG_EV)
#define BLD_WHITE		*(u16*)0x0080	//!< Fade to white (with REG_Y)
#define BLD_BLACK		*(u16*)0x00C0	//!< Fade to black (with REG_Y)

#define BLD_TOP_MASK	0x003F
#define BLD_TOP_SHIFT		 0
#define BLD_TOP(n)		((n)<<BLD_TOP_SHIFT)

#define BLD_MODE_MASK	0x00C0
#define BLD_MODE_SHIFT		 6
#define BLD_MODE(n)		((n)<<BLD_MODE_SHIFT)

#define BLD_BOT_MASK	0x3F00
#define BLD_BOT_SHIFT		 8
#define BLD_BOT(n)		((n)<<BLD_BOT_SHIFT)

#define BLD_BUILD(top, bot, mode)		\
	( (((bot)&63)<<8) | (((mode)&3)<<6) | ((top)&63) )

//\}

// --- REG_BLDALPHA ---

//! \name Blend weights

#define BLD_EVA_MASK	0x001F
#define BLD_EVA_SHIFT		 0
#define BLD_EVA(n)		((n)<<BLD_EVA_SHIFT)

#define BLD_EVB_MASK	0x1F00
#define BLD_EVB_SHIFT		 8
#define BLD_EVB(n)		((n)<<BLD_EVB_SHIFT)

#define BLDA_BUILD(eva, evb)		\
	( ((eva)&31) | (((evb)&31)<<8) )

//\}


// --- REG_BLDY ---

//! \name Fade levels

#define BLDY_MASK		0x001F
#define BLDY_SHIFT		 0
#define BLDY(n)		((n)<<BLD_EY_SHIFT)

#define BLDY_BUILD(ey)				\
	( (ey)&31 )

#define TARGET_TOP_BG0 0x1 //"first target"
#define TARGET_TOP_BG1 0x2
#define TARGET_TOP_BG2 0x4
#define TARGET_TOP_BG3 0x8
#define TARGET_TOP_OBJ 0x10
#define TARGET_TOP_BD 0x20
#define TARGET_LOW_BG0 0x0100 //2nd target
#define TARGET_LOW_BG1 0x0200
#define TARGET_LOW_BG2 0x0400
#define TARGET_LOW_BG3 0x0800
#define TARGET_LOW_OBJ 0x1000
#define TARGET_LOW_BD 0x2000
#define BLEND_NEG 0x40

//all blends 0->14
#define BLEND_LOW(n) ( (n) * 0x1 ) //dark pixels get through
#define BLEND_HIGH(n) ( (n) * 0x100 ) //lighter pixels get through
#define BLEND_LEVEL(n) ( BLEND_LOW(n) | BLEND_HIGH(n) ) //closest to semi-transparent levels

//more
#define N              (624)                 // length of state vector
#define M              (397)                 // a period parameter
#define K              (0x9908B0DFU)         // a magic constant
#define hiBit(u)       ((u) & 0x80000000U)   // mask all but highest   bit of u
#define loBit(u)       ((u) & 0x00000001U)   // mask all but lowest    bit of u
#define loBits(u)      ((u) & 0x7FFFFFFFU)   // mask     the highest   bit of u
#define mixBits(u, v)  (hiBit(u)|loBits(v))  // move hi bit of u to hi bit of v
//colour convertion (converts a RGB colour to a 15-bit BGR value used by the GBA)
#define RGB16_BGR(r, g, b) ((r)+(g<<5)+(b<<10))

//attribute0 #defines
#define ROTATION_FLAG		0x100
#define SIZE_DOUBLE			0x200
#define MODE_NORMAL			0x0
#define MODE_TRANSPARENT	0x400
#define MODE_WINDOWED		0x800
#define MOSAIC				0x1000
#define COLOR_16			0x0000
#define COLOR_256			0x2000
#define SQUARE				0x0

//attribute1 #defines
#define ROTDATA(n)			((n)<<9)
#define HORIZONTAL_FLIP		0x1000
#define VERTICAL_FLIP		0x2000
#define SIZE_8				0x0
#define SIZE_16				0x4000
#define SIZE_32				0x8000
#define SIZE_64				0xC000               

#define OBJ_MODE_NORMAL             0x00
#define OBJ_MODE_SEMITRANSPARENT    0x01
#define OBJ_MODE_OBJWINDOW          0x02


//atrribute2 #defines
#define PRIORITY(n)	        ((n)<<10)
#define PALETTE(n)			((n)<<12)

#if	defined	( __thumb__ )
#define	SystemCall(Number)	 __asm ("SWI	  "#Number"\n" :::  "r0", "r1", "r2", "r3")
#else
#define	SystemCall(Number)	 __asm ("SWI	  "#Number"	<< 16\n" :::"r0", "r1", "r2", "r3")
#endif

#define BIT(number) (1<<(number))

#define IWRAM_CODE	__attribute__((section(".iwram"), long_call))
#define EWRAM_CODE	__attribute__((section(".ewram"), long_call))

#define IWRAM_DATA	__attribute__((section(".iwram")))
#define EWRAM_DATA	__attribute__((section(".ewram")))
#define EWRAM_BSS	__attribute__((section(".sbss")))
#define ALIGN(m)	__attribute__((aligned (m)))

#define BG_COLORS		((u16 *)0x05000000)	// Background color table
#define BG_PALETTE		((u16 *)0x05000000)	// Background color table
/*! \def OBJ_COLORS
*/
#define	OBJ_COLORS		((u16 *)0x05000200)	// Sprite color table
#define	SPRITE_PALETTE	((u16 *)0x05000200)	// Sprite color table

// --------------------------------------------------------------------
// MACROS 
// --------------------------------------------------------------------

#define DEF_SIZE(_name)		.size	_name, .-_name

//! \name Section definitions for assembly.
//\{

#define CSEC_TEXT	.text								//!< Standard code section directive.
#define CSEC_EWRAM	.section .ewram , "ax", %progbits	//!< EWRAM code section directive.
#define CSEC_IWRAM	.section .iwram, "ax", %progbits	//!< IWRAM code section directive.

#define DSEC_DATA	.data						//<! Standard data section directive.
#define DSEC_ROM	.section .rodata			//!< ROM data section directive.
#define DSEC_BSS	.section .bss				//!< Uninited data (RAM) section directive.
#define DSEC_SBSS	.section .sbss				//!< Uninited data (DTCM?) section directive.

#define ARM_FUNC	.arm						//!< Indicates an ARM function.
#define THUMB_FUNC	.thumb_func					//!< Indicates a Thumb function.

//# NOTE: because these use commas, I can't pass them through CPP macros.
//# Yes, this is stupid, but do you have a better idea?

//\}


//! \name Function definition macros.
//\{

//! Start an assembly function.
/*!	
	\param _name	Name of function.
	\param _section	Section to place function in (like .text)
*/
#define BEGIN_FUNC(_name, _section, _iset)	\
	_section;								\
	_iset;									\
	.align 2;								\
	.global _name;							\
	.type _name STT_FUNC;					\
_name:

//! End of a function.
#define END_FUNC(_name)		DEF_SIZE(_name)

//! Begin an ARM function
/*!	
	\param _name	Name of function.
	\param _section	Section to place function in (like .text)
*/
#define BEGIN_FUNC_ARM(_name, _section)		BEGIN_FUNC(_name, _section, ARM_FUNC)

//! Begin a THUMB function.
/*!	
	\param _name	Name of function.
	\param _section	Section to place function in (like .text)
*/
#define BEGIN_FUNC_THUMB(_name, _section)	BEGIN_FUNC(_name, _section, THUMB_FUNC)
//\}

//! \name Data definition macros.
//\{
#define BEGIN_SYMBOL(_name, _section)			\
	_section;									\
	.align;										\
	.global _name;								\
_name:

#define END_SYMBOL(_name)	DEF_SIZE(_name)
//\}

// --------------------------------------------------------------------
// CONSTANTS
// --------------------------------------------------------------------

//! \name TSurface member offsets.
//\{
#define TSRF_data			 0
#define TSRF_pitch			 4
#define TSRF_width			 8
#define TSRF_height			10
#define TSRF_bpp			12
#define TSRF_type			13
#define TSRF_palSize		14
#define TSRF_pal			16
//\}


// --------------------------------------------------------------------
// GLOBALS 
// --------------------------------------------------------------------
// --------------------------------------------------------------------
// PROTOTYPES 
// --------------------------------------------------------------------
// --------------------------------------------------------------------
// INLINES 
// --------------------------------------------------------------------


#ifndef RGB_GET_R_VALUE
 #define RGB_GET_R_VALUE(rgb)    ((rgb & 0x001f) << 3)
#endif
#ifndef RGB_GET_G_VALUE
 #define RGB_GET_G_VALUE(rgb)    (((rgb >> 5) & 0x001f) << 3)
#endif
#ifndef RGB_GET_B_VALUE
 #define RGB_GET_B_VALUE(rgb)    (((rgb >> 10) & 0x001f) << 3)
#endif

#define ACCESS_8(location)		*(volatile u8 *)  (location)
#define ACCESS_16(location)		*(volatile u16 *) (location)
#define ACCESS_32(location)		*(volatile u32 *) (location)
#define MEM_PAL_COL_PTR(x)		 (u16*) (0x05000000+(x<<1))	// Palette color pointer
#define RGB(r,g,b) ((((b)>>3)<<10)+(((g)>>3)<<5)+((r)>>3))

#define fBG "bg"
#define fOBJ "obj"

#define vsync WaitForVblank();

#define  OLD_GAMEBOY     0x0008    // Flag showing the old GBC. 

#define INT_VBLANK    		0x0001
#define INT_HBLANK		0x0002	
#define INT_VCOUNT		0x0004	
#define INT_TIMMER0		0x0008
#define INT_TIMMER1		0x0010
#define INT_TIMMER2		0x0020	
#define INT_TIMMER3		0x0040
#define INT_COMUNICATION	0x0080
#define INT_DMA0		0x0100
#define INT_DMA1		0x0200
#define INT_DMA2		0x0400
#define INT_DMA3		0x0800
#define INT_KEYBOARD		0x1000
#define INT_CART		0x2000
#define INT_ALL			0x4000

#define DMA_ENABLE				0x80000000
#define DMA_INTERUPT_ENABLE			0x40000000
#define DMA_TIMEING_IMMEDIATE			0x00000000
#define DMA_TIMEING_VBLANK			0x10000000
#define DMA_TIMEING_HBLANK			0x20000000
#define DMA_TIMEING_SYNC_TO_DISPLAY		0x30000000
#define DMA_16					0x00000000
#define DMA_32					0x04000000
#define DMA_REPEATE				0x02000000
#define DMA_SOURCE_INCREMENT			0x00000000
#define DMA_SOURCE_DECREMENT			0x00800000
#define DMA_SOURCE_FIXED			0x01000000
#define DMA_DEST_INCREMENT			0x00000000
#define DMA_DEST_DECREMENT			0x00200000
#define DMA_DEST_FIXED				0x00400000
#define DMA_DEST_RELOAD				0x00600000


#define DMA_32NOW              DMA_ENABLE | DMA_TIMEING_IMMEDIATE |DMA_32 
#define DMA_16NOW	   DMA_ENABLE | DMA_TIMEING_IMMEDIATE |DMA_16 



typedef struct tagOAMEntry
{

	u16 attribute0;
	u16 attribute1;
	u16 attribute2;
	u16 attribute3;

}OAMEntry, *pOAMEntry;

typedef struct tagRotData
{

	u16 filler1[3];
	u16 pa;
	u16 filler2[3];
	u16 pb;
	u16 filler3[3];
	u16 pc;
	u16 filler4[3];
	u16 pd;

}RotData, *pRotData;


typedef struct
{

	u16 x;
	u16 y;
	u16 OAMSpriteNum;
	u16 *SpriteData;

}Sprite, *pSprite;

//create the array of sprites (128 is the maximum)
OAMEntry sprites[128];

//create the rotation and scaling array (overlaps the OAMEntry array memory)
pRotData rotData = (pRotData)sprites;

s32 angle = 0;
s32 zoom = 1<<8;

const unsigned char font_matrix[] =
{
// (space) 32
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
// ! 33
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
// " 34
    0,0,0,0,0,0,0,0,
    0,W,W,0,W,W,0,0,
    0,W,W,0,W,W,0,0,
    0,0,W,0,0,W,0,0,
    0,0,W,0,0,W,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
// # 35
    0,0,0,0,0,0,0,0,
    0,0,W,0,0,W,0,0,
    0,W,W,W,W,W,W,0,
    0,0,W,0,0,W,0,0,
    0,0,W,0,0,W,0,0,
    0,W,W,W,W,W,W,0,
    0,0,W,0,0,W,0,0,
    0,0,0,0,0,0,0,0,
// $ 36
    0,0,0,W,0,0,0,0,
    0,0,W,W,W,W,0,0,
    0,W,0,W,0,0,0,0,
    0,0,W,W,W,0,0,0,
    0,0,0,W,0,W,0,0,
    0,W,W,W,W,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
// % 37
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,W,W,0,0,W,0,0,
    0,W,W,0,W,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,W,0,W,W,0,0,
    0,W,0,0,W,W,0,0,
    0,0,0,0,0,0,0,0,
// & 38
    0,0,0,0,0,0,0,0,
    0,0,W,W,W,0,0,0,
    0,W,0,0,0,W,0,0,
    0,0,W,W,W,0,0,0,
    0,W,0,W,0,0,0,0,
    0,W,0,0,W,0,W,0,
    0,0,W,W,W,W,0,0,
    0,0,0,0,0,0,W,0,
// ' 39
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,W,0,0,0,
    0,0,0,0,W,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
// ( 40
    0,0,0,0,0,0,W,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,W,0,0,
    0,0,0,0,0,0,W,0,
// ) 41
    0,W,0,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,0,W,0,0,0,0,0,
    0,W,0,0,0,0,0,0,
// *
    0,0,0,0,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,W,0,W,0,W,0,0,
    0,0,W,W,W,0,0,0,
    0,0,W,W,W,0,0,0,
    0,0,W,W,W,0,0,0,
    0,W,0,0,0,W,0,0,
    0,0,0,0,0,0,0,0,
// +
    0,0,0,0,0,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,0,0,0,0,
// ,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,0,0,0,0,0,
// -
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
// .
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
// /
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,W,0,
    0,0,0,0,0,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,0,0,0,0,0,0,
// 0
    0,0,W,W,W,W,0,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,W,0,W,0,
    0,W,W,W,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// 1
    0,0,0,0,W,0,0,0,
    0,0,W,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,W,W,0,0,
// 2
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,0,0,0,0,W,0,
    0,0,0,0,0,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,W,W,W,W,0,
// 3
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,0,0,0,0,W,0,
    0,0,0,0,0,0,W,0,
    0,0,0,W,W,W,0,0,
    0,0,0,0,0,0,W,0,
    0,W,0,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// 4
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,W,0,0,
    0,0,W,W,0,W,0,0,
    0,W,W,0,0,W,0,0,
    0,W,W,W,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
// 5
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,0,W,W,W,W,0,0,
    0,0,0,0,0,0,W,0,
    0,W,0,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// 6
    0,0,0,W,W,W,W,0,
    0,0,W,W,W,W,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// 7
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,W,0,0,0,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
// 8
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// 9
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,W,0,
    0,0,0,0,0,W,W,0,
    0,0,0,0,0,W,W,0,
    0,0,0,0,0,W,W,0,
// :
    0,0,0,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
// ;
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
// <
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,W,W,0,0,
// =
    0,0,0,0,0,0,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,0,0,
    0,0,0,0,0,0,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,0,0,0,0,0,
// >
    0,W,W,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,0,0,0,0,0,
// ?
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,0,0,0,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,0,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
// @
    0,0,0,0,0,0,0,0,
    0,0,W,W,W,0,0,0,
    0,W,0,0,0,W,0,0,
    0,W,0,W,W,0,0,0,
    0,W,0,W,W,0,0,0,
    0,W,0,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
    0,0,0,0,0,0,0,0,
// A 65
    0,0,W,W,W,0,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,0,0,W,0,0,
    0,W,W,0,0,W,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,0,0,W,0,0,
    0,W,W,0,0,W,0,0,
// B 66
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,0,W,0,0,
    0,W,W,W,W,W,0,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,W,W,W,0,0,
// C 67
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// D 68
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,W,W,W,0,0,
// E 69
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,W,W,0,
// F 70
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
// G 71
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// H 72
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
// I 73
    0,0,W,W,W,W,0,0,
    0,0,W,W,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,W,W,0,0,
// J 74
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,W,0,0,W,W,0,0,
    0,W,W,W,W,W,0,0,
    0,0,W,W,W,0,0,0,
// K 75
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,W,W,0,0,
    0,W,W,W,W,0,0,0,
    0,W,W,W,W,0,0,0,
    0,W,W,0,W,W,0,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,0,0,W,0,
// L 76
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,W,W,0,
// M 77
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,W,0,W,W,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,W,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
// N 78
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,W,0,0,W,0,
    0,W,W,W,W,0,W,0,
    0,W,W,0,W,W,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
// O 79
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// P 80
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,W,W,W,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
// Q 81
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,W,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,W,
// R 82
    0,W,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,W,0,0,
    0,W,W,W,W,0,0,0,
    0,W,W,0,W,W,0,0,
    0,W,W,0,0,W,W,0,
// S 83
    0,0,W,W,W,W,0,0,
    0,W,W,W,W,W,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,0,0,
    0,0,W,W,W,W,0,0,
    0,0,0,0,0,0,W,0,
    0,W,0,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// T 84
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
// U 85
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
// V 86
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,0,W,0,0,
    0,0,W,W,0,W,0,0,
    0,0,W,W,0,W,0,0,
    0,0,0,W,W,0,0,0,
// W 87
    0,W,W,0,0,0,0,W,
    0,W,W,0,0,0,0,W,
    0,W,W,0,0,0,0,W,
    0,W,W,0,0,0,0,W,
    0,W,W,0,W,W,0,W,
    0,0,W,W,0,0,W,0,
    0,0,W,W,0,0,W,0,
    0,0,W,W,0,0,W,0,
// X 88
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,0,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,W,0,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
// Y 89
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,W,W,0,0,0,W,0,
    0,0,W,W,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
// Z 90
    0,W,W,W,W,W,W,0,
    0,W,W,W,W,W,W,0,
    0,0,0,0,0,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,W,W,0,0,0,
    0,0,W,W,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,W,W,W,W,W,W,0,
// [ 91
    0,0,0,0,W,W,W,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,W,0,
// \ 92
    0,W,W,0,0,0,0,0,
    0,W,W,0,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,W,W,0,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,W,W,0,0,0,
    0,0,0,0,W,W,0,0,
    0,0,0,0,W,W,0,0,
// ] 93
    0,W,W,W,0,0,0,0,
    0,W,W,W,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,0,0,W,0,0,0,0,
    0,W,W,W,0,0,0,0,
};

const double SIN[360] = { 0 , 4.46781 , 8.93426 , 13.398 , 17.8576 , 22.3119 , 26.7593 , 31.1985 , 35.6283 , 40.0472 , 44.4539 ,
		48.8471 , 53.2253 , 57.5874 , 61.932 , 66.2576 , 70.5631 , 74.8471 , 79.1083 , 83.3454 , 87.5571 ,
		91.7421 , 95.8992 , 100.027 , 104.124 , 108.19 , 112.223 , 116.221 , 120.185 , 124.111 , 128 ,
		131.85 , 135.659 , 139.427 , 143.153 , 146.835 , 150.473 , 154.065 , 157.609 , 161.106 , 164.554 ,
		167.951 , 171.297 , 174.591 , 177.832 , 181.019 , 184.151 , 187.226 , 190.245 , 193.206 , 196.107 ,
		198.949 , 201.731 , 204.451 , 207.108 , 209.703 , 212.234 , 214.7 , 217.1 , 219.435 , 221.702 ,
		223.903 , 226.034 , 228.098 , 230.091 , 232.015 , 233.868 , 235.649 , 237.359 , 238.996 , 240.561 ,
		242.053 , 243.47 , 244.814 , 246.083 , 247.277 , 248.396 , 249.439 , 250.406 , 251.297 , 252.111 ,
		252.848 , 253.509 , 254.092 , 254.598 , 255.026 , 255.376 , 255.649 , 255.844 , 255.961 , 256 ,
		255.961 , 255.844 , 255.649 , 255.376 , 255.026 , 254.598 , 254.092 , 253.509 , 252.848 , 252.111 ,
		251.297 , 250.406 , 249.439 , 248.396 , 247.277 , 246.083 , 244.814 , 243.471 , 242.053 , 240.561 ,
		238.997 , 237.359 , 235.649 , 233.868 , 232.015 , 230.091 , 228.098 , 226.035 , 223.903 , 221.703 ,
		219.435 , 217.101 , 214.7 , 212.234 , 209.703 , 207.109 , 204.451 , 201.731 , 198.95 , 196.108 ,
		193.206 , 190.245 , 187.227 , 184.151 , 181.02 , 177.833 , 174.592 , 171.298 , 167.952 , 164.554 ,
		161.106 , 157.61 , 154.065 , 150.473 , 146.836 , 143.154 , 139.428 , 135.66 , 131.85 , 128 ,
		124.112 , 120.185 , 116.222 , 112.224 , 108.191 , 104.125 , 100.028 , 95.8998 , 91.7428 , 87.5577 ,
		83.346 , 79.1089 , 74.8477 , 70.5638 , 66.2583 , 61.9326 , 57.5881 , 53.226 , 48.8477 , 44.4546 ,
		40.0479 , 35.629 , 31.1992 , 26.7599 , 22.3125 , 17.8583 , 13.3987 , 8.93494 , 4.46849 , 0.000679319 ,
		-4.46713 , -8.93358 , -13.3973 , -17.857 , -22.3112 , -26.7586 , -31.1979 , -35.6276 , -40.0465 , -44.4532 ,
		-48.8464 , -53.2247 , -57.5868 , -61.9313 , -66.257 , -70.5625 , -74.8464 , -79.1076 , -83.3447 , -87.5564 ,
		-91.7415 , -95.8986 , -100.026 , -104.124 , -108.19 , -112.222 , -116.221 , -120.184 , -124.111 , -127.999 ,
		-131.849 , -135.659 , -139.427 , -143.153 , -146.835 , -150.472 , -154.064 , -157.609 , -161.105 , -164.553 ,
		-167.95 , -171.297 , -174.591 , -177.832 , -181.019 , -184.15 , -187.226 , -190.244 , -193.205 , -196.107 ,
		-198.949 , -201.73 , -204.45 , -207.108 , -209.702 , -212.233 , -214.699 , -217.1 , -219.434 , -221.702 ,
		-223.902 , -226.034 , -228.097 , -230.091 , -232.014 , -233.867 , -235.649 , -237.359 , -238.996 , -240.561 ,
		-242.052 , -243.47 , -244.814 , -246.083 , -247.277 , -248.395 , -249.439 , -250.406 , -251.296 , -252.111 ,
		-252.848 , -253.508 , -254.092 , -254.598 , -255.026 , -255.376 , -255.649 , -255.844 , -255.961 , -256 ,
		-255.961 , -255.844 , -255.649 , -255.376 , -255.026 , -254.598 , -254.092 , -253.509 , -252.848 , -252.111 ,
		-251.297 , -250.406 , -249.439 , -248.396 , -247.277 , -246.083 , -244.814 , -243.471 , -242.053 , -240.562 ,
		-238.997 , -237.359 , -235.65 , -233.868 , -232.015 , -230.092 , -228.098 , -226.035 , -223.903 , -221.703 ,
		-219.435 , -217.101 , -214.7 , -212.234 , -209.704 , -207.109 , -204.451 , -201.731 , -198.95 , -196.108 ,
		-193.206 , -190.246 , -187.227 , -184.152 , -181.02 , -177.833 , -174.592 , -171.298 , -167.952 , -164.555 ,
		-161.107 , -157.61 , -154.066 , -150.474 , -146.837 , -143.154 , -139.429 , -135.66 , -131.851 , -128.001 ,
		-124.112 , -120.186 , -116.223 , -112.224 , -108.191 , -104.126 , -100.028 , -95.9005 , -91.7434 , -87.5584 ,
		-83.3467 , -79.1096 , -74.8484 , -70.5644 , -66.2589 , -61.9333 , -57.5887 , -53.2267 , -48.8484 , -44.4552 ,
		-40.0485 , -35.6296 , -31.1999 , -26.7606 , -22.3132 , -17.859 , -13.3994 , -8.93562 , -4.46917 ,  };

const double COS[360] = { 256 , 255.961 , 255.844 , 255.649 , 255.376 , 255.026 , 254.598 , 254.092 , 253.509 , 252.848 , 252.111 ,
		251.297 , 250.406 , 249.439 , 248.396 , 247.277 , 246.083 , 244.814 , 243.47 , 242.053 , 240.561 ,
		238.997 , 237.359 , 235.649 , 233.868 , 232.015 , 230.091 , 228.098 , 226.035 , 223.903 , 221.703 ,
		219.435 , 217.1 , 214.7 , 212.234 , 209.703 , 207.108 , 204.451 , 201.731 , 198.949 , 196.107 ,
		193.206 , 190.245 , 187.227 , 184.151 , 181.019 , 177.833 , 174.592 , 171.298 , 167.951 , 164.554 ,
		161.106 , 157.609 , 154.065 , 150.473 , 146.836 , 143.154 , 139.428 , 135.66 , 131.85 , 128 ,
		124.111 , 120.185 , 116.222 , 112.223 , 108.19 , 104.125 , 100.027 , 95.8995 , 91.7424 , 87.5574 ,
		83.3457 , 79.1086 , 74.8474 , 70.5634 , 66.2579 , 61.9323 , 57.5878 , 53.2257 , 48.8474 , 44.4542 ,
		40.0475 , 35.6286 , 31.1989 , 26.7596 , 22.3122 , 17.858 , 13.3983 , 8.9346 , 4.46815 , 0.000339659 ,
		-4.46747 , -8.93392 , -13.3977 , -17.8573 , -22.3115 , -26.7589 , -31.1982 , -35.6279 , -40.0469 , -44.4536 ,
		-48.8467 , -53.225 , -57.5871 , -61.9316 , -66.2573 , -70.5628 , -74.8468 , -79.108 , -83.3451 , -87.5568 ,
		-91.7418 , -95.8989 , -100.027 , -104.124 , -108.19 , -112.223 , -116.221 , -120.184 , -124.111 , -128 ,
		-131.849 , -135.659 , -139.427 , -143.153 , -146.835 , -150.473 , -154.064 , -157.609 , -161.106 , -164.553 ,
		-167.951 , -171.297 , -174.591 , -177.832 , -181.019 , -184.151 , -187.226 , -190.245 , -193.205 , -196.107 ,
		-198.949 , -201.73 , -204.45 , -207.108 , -209.703 , -212.233 , -214.699 , -217.1 , -219.435 , -221.702 ,
		-223.902 , -226.034 , -228.097 , -230.091 , -232.015 , -233.867 , -235.649 , -237.359 , -238.996 , -240.561 ,
		-242.053 , -243.47 , -244.814 , -246.083 , -247.277 , -248.396 , -249.439 , -250.406 , -251.296 , -252.111 ,
		-252.848 , -253.509 , -254.092 , -254.598 , -255.026 , -255.376 , -255.649 , -255.844 , -255.961 , -256 ,
		-255.961 , -255.844 , -255.649 , -255.376 , -255.026 , -254.598 , -254.092 , -253.509 , -252.848 , -252.111 ,
		-251.297 , -250.406 , -249.439 , -248.396 , -247.277 , -246.083 , -244.814 , -243.471 , -242.053 , -240.562 ,
		-238.997 , -237.359 , -235.65 , -233.868 , -232.015 , -230.092 , -228.098 , -226.035 , -223.903 , -221.703 ,
		-219.435 , -217.101 , -214.7 , -212.234 , -209.703 , -207.109 , -204.451 , -201.731 , -198.95 , -196.108 ,
		-193.206 , -190.246 , -187.227 , -184.152 , -181.02 , -177.833 , -174.592 , -171.298 , -167.952 , -164.554 ,
		-161.107 , -157.61 , -154.065 , -150.474 , -146.836 , -143.154 , -139.428 , -135.66 , -131.851 , -128.001 ,
		-124.112 , -120.186 , -116.222 , -112.224 , -108.191 , -104.125 , -100.028 , -95.9002 , -91.7431 , -87.558 ,
		-83.3463 , -79.1093 , -74.8481 , -70.5641 , -66.2586 , -61.9329 , -57.5884 , -53.2263 , -48.8481 , -44.4549 ,
		-40.0482 , -35.6293 , -31.1995 , -26.7603 , -22.3129 , -17.8587 , -13.399 , -8.93528 , -4.46883 , -0.00101898 ,
		4.46679 , 8.93325 , 13.397 , 17.8566 , 22.3108 , 26.7583 , 31.1975 , 35.6273 , 40.0462 , 44.4529 ,
		48.8461 , 53.2244 , 57.5864 , 61.931 , 66.2566 , 70.5621 , 74.8461 , 79.1073 , 83.3444 , 87.5561 ,
		91.7412 , 95.8983 , 100.026 , 104.124 , 108.189 , 112.222 , 116.221 , 120.184 , 124.11 , 127.999 ,
		131.849 , 135.658 , 139.427 , 143.152 , 146.835 , 150.472 , 154.064 , 157.608 , 161.105 , 164.553 ,
		167.95 , 171.297 , 174.591 , 177.832 , 181.018 , 184.15 , 187.226 , 190.244 , 193.205 , 196.107 ,
		198.949 , 201.73 , 204.45 , 207.108 , 209.702 , 212.233 , 214.699 , 217.1 , 219.434 , 221.702 ,
		223.902 , 226.034 , 228.097 , 230.091 , 232.014 , 233.867 , 235.649 , 237.359 , 238.996 , 240.561 ,
		242.052 , 243.47 , 244.814 , 246.083 , 247.277 , 248.395 , 249.438 , 250.406 , 251.296 , 252.111 ,
		252.848 , 253.508 , 254.092 , 254.597 , 255.026 , 255.376 , 255.649 , 255.844 , 255.961 ,  };

const double RAD[360] = { 0 , 0.0174533 , 0.0349066 , 0.0523598 , 0.0698131 , 0.0872664 , 0.10472 , 0.122173 , 0.139626 , 0.15708 , 0.174533 ,
		0.191986 , 0.209439 , 0.226893 , 0.244346 , 0.261799 , 0.279252 , 0.296706 , 0.314159 , 0.331612 , 0.349066 ,
		0.366519 , 0.383972 , 0.401425 , 0.418879 , 0.436332 , 0.453785 , 0.471238 , 0.488692 , 0.506145 , 0.523598 ,
		0.541052 , 0.558505 , 0.575958 , 0.593411 , 0.610865 , 0.628318 , 0.645771 , 0.663225 , 0.680678 , 0.698131 ,
		0.715584 , 0.733038 , 0.750491 , 0.767944 , 0.785397 , 0.802851 , 0.820304 , 0.837757 , 0.855211 , 0.872664 ,
		0.890117 , 0.90757 , 0.925024 , 0.942477 , 0.95993 , 0.977384 , 0.994837 , 1.01229 , 1.02974 , 1.0472 ,
		1.06465 , 1.0821 , 1.09956 , 1.11701 , 1.13446 , 1.15192 , 1.16937 , 1.18682 , 1.20428 , 1.22173 ,
		1.23918 , 1.25664 , 1.27409 , 1.29154 , 1.309 , 1.32645 , 1.3439 , 1.36136 , 1.37881 , 1.39626 ,
		1.41372 , 1.43117 , 1.44862 , 1.46608 , 1.48353 , 1.50098 , 1.51844 , 1.53589 , 1.55334 , 1.57079 ,
		1.58825 , 1.6057 , 1.62315 , 1.64061 , 1.65806 , 1.67551 , 1.69297 , 1.71042 , 1.72787 , 1.74533 ,
		1.76278 , 1.78023 , 1.79769 , 1.81514 , 1.83259 , 1.85005 , 1.8675 , 1.88495 , 1.90241 , 1.91986 ,
		1.93731 , 1.95477 , 1.97222 , 1.98967 , 2.00713 , 2.02458 , 2.04203 , 2.05949 , 2.07694 , 2.09439 ,
		2.11185 , 2.1293 , 2.14675 , 2.16421 , 2.18166 , 2.19911 , 2.21657 , 2.23402 , 2.25147 , 2.26893 ,
		2.28638 , 2.30383 , 2.32129 , 2.33874 , 2.35619 , 2.37365 , 2.3911 , 2.40855 , 2.42601 , 2.44346 ,
		2.46091 , 2.47837 , 2.49582 , 2.51327 , 2.53073 , 2.54818 , 2.56563 , 2.58309 , 2.60054 , 2.61799 ,
		2.63544 , 2.6529 , 2.67035 , 2.6878 , 2.70526 , 2.72271 , 2.74016 , 2.75762 , 2.77507 , 2.79252 ,
		2.80998 , 2.82743 , 2.84488 , 2.86234 , 2.87979 , 2.89724 , 2.9147 , 2.93215 , 2.9496 , 2.96706 ,
		2.98451 , 3.00196 , 3.01942 , 3.03687 , 3.05432 , 3.07178 , 3.08923 , 3.10668 , 3.12414 , 3.14159 ,
		3.15904 , 3.1765 , 3.19395 , 3.2114 , 3.22886 , 3.24631 , 3.26376 , 3.28122 , 3.29867 , 3.31612 ,
		3.33358 , 3.35103 , 3.36848 , 3.38594 , 3.40339 , 3.42084 , 3.4383 , 3.45575 , 3.4732 , 3.49066 ,
		3.50811 , 3.52556 , 3.54302 , 3.56047 , 3.57792 , 3.59538 , 3.61283 , 3.63028 , 3.64774 , 3.66519 ,
		3.68264 , 3.70009 , 3.71755 , 3.735 , 3.75245 , 3.76991 , 3.78736 , 3.80481 , 3.82227 , 3.83972 ,
		3.85717 , 3.87463 , 3.89208 , 3.90953 , 3.92699 , 3.94444 , 3.96189 , 3.97935 , 3.9968 , 4.01425 ,
		4.03171 , 4.04916 , 4.06661 , 4.08407 , 4.10152 , 4.11897 , 4.13643 , 4.15388 , 4.17133 , 4.18879 ,
		4.20624 , 4.22369 , 4.24115 , 4.2586 , 4.27605 , 4.29351 , 4.31096 , 4.32841 , 4.34587 , 4.36332 ,
		4.38077 , 4.39823 , 4.41568 , 4.43313 , 4.45059 , 4.46804 , 4.48549 , 4.50295 , 4.5204 , 4.53785 ,
		4.55531 , 4.57276 , 4.59021 , 4.60767 , 4.62512 , 4.64257 , 4.66003 , 4.67748 , 4.69493 , 4.71238 ,
		4.72984 , 4.74729 , 4.76474 , 4.7822 , 4.79965 , 4.8171 , 4.83456 , 4.85201 , 4.86946 , 4.88692 ,
		4.90437 , 4.92182 , 4.93928 , 4.95673 , 4.97418 , 4.99164 , 5.00909 , 5.02654 , 5.044 , 5.06145 ,
		5.0789 , 5.09636 , 5.11381 , 5.13126 , 5.14872 , 5.16617 , 5.18362 , 5.20108 , 5.21853 , 5.23598 ,
		5.25344 , 5.27089 , 5.28834 , 5.3058 , 5.32325 , 5.3407 , 5.35816 , 5.37561 , 5.39306 , 5.41052 ,
		5.42797 , 5.44542 , 5.46288 , 5.48033 , 5.49778 , 5.51524 , 5.53269 , 5.55014 , 5.5676 , 5.58505 ,
		5.6025 , 5.61996 , 5.63741 , 5.65486 , 5.67232 , 5.68977 , 5.70722 , 5.72468 , 5.74213 , 5.75958 ,
		5.77703 , 5.79449 , 5.81194 , 5.82939 , 5.84685 , 5.8643 , 5.88175 , 5.89921 , 5.91666 , 5.93411 ,
		5.95157 , 5.96902 , 5.98647 , 6.00393 , 6.02138 , 6.03883 , 6.05629 , 6.07374 , 6.09119 , 6.10865 ,
		6.1261 , 6.14355 , 6.16101 , 6.17846 , 6.19591 , 6.21337 , 6.23082 , 6.24827 , 6.26573 ,  };

//Functions
void Sleep(u32 frames)
{
	int i;
	i = frames;
	while (i--)
		WaitForVblank();
}

void WaitForVblank(void)
{
    while(REG_VCOUNT >= 160);   // wait till VDraw
    while(REG_VCOUNT < 160);    // wait till VBlank
}

void DMA_Copy(u8 channel, void* source, void* dest, u32 WordCount, u32 mode)
{
	switch (channel)
	{
		case 0: 
			REG_DM0SAD = (u32)source;
			REG_DM0DAD = (u32)dest;			
			REG_DM0CNT = WordCount | mode;
			break;
		case 1:
			REG_DM1SAD = (u32)source;
			REG_DM1DAD = (u32)dest;
			REG_DM1CNT = WordCount | mode;
			break;
		case 2:
			REG_DM2SAD = (u32)source;
			REG_DM2DAD = (u32)dest;
			REG_DM2CNT = WordCount | mode;
			break;

		case 3:
			REG_DM3SAD = (u32)source;
			REG_DM3DAD = (u32)dest;
			REG_DM3CNT = WordCount | mode;
			break;

	}
}


void PlotPixelOpaque(int x,int y, unsigned short int c)	
{ 
	videoBuffer[(y) *120 + (x)] = (c); 
}

void plot3(int x,int y, unsigned short int c)	
{ 
	videoBuffer[(y) *240 + (x)] = (c); 
}

void PlotPixelTransparent(int x,int y, unsigned short int c)	
{ 
	u16 temp;

	// transform coordinates into a location, so we're a bit faster
	u16 location = (y) * 120 + (x);
	// and get a pointer to this video buffer location so that 
	// we don't index all the time
	u16* vptr = &videoBuffer[location];

	if ((c & 0x00FF) == 0) // bottom is transparent
	{
		if ((c & 0xFF00) == 0) // top is also transparent
			return;
		// so bottom transparent, top is not so....
		temp = (*vptr & 0x00FF);
		temp |= c; // or it with c (to get the highpart of c in
		*vptr = (temp);
	}
	else
	if 	((c & 0xFF00) == 0) // only the top is transprent
	{
		temp = (*vptr & 0xFF00);
		temp |= c;
		*vptr = (temp);
	}
	else // no part is transparent
		*vptr = (c); 
}

// ----- BITMAP functions ------
void DrawBitmapTransparent( u16 x, u16 y, u16 height, u16 width, u16* data ) {
	u16 cx, cy;
	u16 halfWidth = width / 2;
	u16 y_times_halfWidth;
	// draw the tank
	for(cy = 0; cy < height; cy++) {
		y_times_halfWidth = cy*halfWidth;
		for (cx = 0; cx < halfWidth; cx++) {
			PlotPixelTransparent(cx+x, cy+y, *(data + y_times_halfWidth + cx));
		}
	}
}

void DrawBitmapOpaque( u16 x, u16 y, u16 height, u16 width, u16* data ) {
	u16 cx, cy;
	u16 halfWidth = width / 2;
	u16 y_times_halfWidth;
	// draw the tank
	for(cy = 0; cy < height; cy++) {
		y_times_halfWidth = cy*halfWidth;
		for (cx = 0; cx < halfWidth; cx++) {
			PlotPixelOpaque(cx+x, cy+y, *(data + y_times_halfWidth + cx));
			//videoBuffer[y_times_halfWidth + cx] = *(data + y_times_halfWidth + cx);
		}
	}
}

void DrawFullScreenOpaque( u16* data )
{
	int x, y;
	u16 t;
	// draw the picture
	for(y = 0; y < 160; y++)
	{
		t = y * 120;
		for(x = 0; x < 120; x++)
		{
			videoBuffer[t + x] = *(data + t +x);
			
		}
	}
}

void Flip(void)			// flips between the back/front buffer
{
	WaitForVblank();

	if(REG_DISPCNT & BACKBUFFER) //back buffer is the current buffer so we need to switch it to the font buffer
	{ 
		REG_DISPCNT &= ~BACKBUFFER; //flip active buffer to front buffer by clearing back buffer bit
		videoBuffer = BackBuffer; //now we point our drawing buffer to the back buffer
    }
    else //front buffer is active so switch it to backbuffer
    { 
		REG_DISPCNT |= BACKBUFFER; //flip active buffer to back buffer by setting back buffer bit
		videoBuffer = FrontBuffer; //now we point our drawing buffer to the front buffer
	}
}

void SetPalette( u16* palette ) {
	u16* p = paletteMem;
	while(p < paletteMem+256)*p++ = *palette++;
}

void DrawBitmapSectorTransparent( u16 x, u16 y, //where on screen we are writing this character
				u16 height, u16 width, //height and width of the whole character map
				u16 bitmapx, u16 bitmapy, //top left position in the character map where we're starting
				u16 bitmapheight, u16 bitmapwidth, //how many pixels horizontally and vertically we're writing
				u16* data ) {
	u16 cx, cy;
	u16 halfWidth = width / 2;
	u16 halfBitmapWidth = bitmapwidth / 2;
	u16 y_times_halfWidth;
	u16 y_times_bitmapHalfWidth;
	u16 start_at = halfWidth * bitmapy + bitmapx/2;
	
	// draw the tank
	for(cy = 0; cy < bitmapheight; cy++) {
		y_times_halfWidth = cy*halfWidth;
		y_times_bitmapHalfWidth = cy*halfBitmapWidth;
		for (cx = 0; cx < halfBitmapWidth; cx++) {
			PlotPixelTransparent(cx+x, cy+y, *(data + start_at + y_times_halfWidth + cx));
		}
	}
}


void DrawBitmapSectorOpaque( u16 x, u16 y, //where on screen we are writing this character
				u16 height, u16 width, //height and width of the whole character map
				u16 bitmapx, u16 bitmapy, //top left position in the character map where we're starting
				u16 bitmapheight, u16 bitmapwidth, //how many pixels horizontally and vertically we're writing
				u16* data ) {
	u16 cx, cy;
	u16 halfWidth = width / 2;
	u16 halfBitmapWidth = bitmapwidth / 2;
	u16 y_times_halfWidth;
	u16 y_times_bitmapHalfWidth;
	u16 start_at = halfWidth * bitmapy + bitmapx/2;
	
	// draw the tank
	for(cy = 0; cy < bitmapheight; cy++) {
		y_times_halfWidth = cy*halfWidth;
		y_times_bitmapHalfWidth = cy*halfBitmapWidth;
		for (cx = 0; cx < halfBitmapWidth; cx++) {
			PlotPixelOpaque(cx+x, cy+y, *(data + start_at + y_times_halfWidth + cx));
		}
	}
}

void PlayWhiteNoise( u16 selector ) {

	REG_SOUNDCNT_X = 0x80;
	REG_SOUNDCNT_L=0xFF77;
	REG_SOUNDCNT_H = 2;

	REG_SOUND4CNT_L=0xf700;
	REG_SOUND4CNT_H=selector;
}

void PlayFrequencySweep( u16 frequency){

	REG_SOUNDCNT_X = 0x80;
	REG_SOUNDCNT_L=0xFF77;
	REG_SOUNDCNT_H = 2;

	REG_SOUND1CNT_L=0x0056;
	REG_SOUND1CNT_H=0xf780;
	REG_SOUND1CNT_X=0x8000 | frequency;
}

void PlayVolumeSweep( u16 frequency ){

	REG_SOUNDCNT_X = 0x80;
	REG_SOUNDCNT_L=0xFF77;
	REG_SOUNDCNT_H = 2;
	REG_SOUND2CNT_L=0xF780;
	REG_SOUND2CNT_H= 0x8000 | frequency;
}

void PlayNote( u16 frequency, unsigned char length ){

	unsigned char adjustedLength = 0xFF - length;

	REG_SOUNDCNT_X = 0x80;
	REG_SOUNDCNT_L=0xFF77;

	REG_SOUNDCNT_H = 2;

	REG_SOUND3CNT_L = SOUND3BANK32 | SOUND3SETBANK1;
	REG_WAVE_RAM0=0x10325476;
	REG_WAVE_RAM1=0x98badcfe;
	REG_WAVE_RAM2=0x10325476;
	REG_WAVE_RAM3=0x98badcfe;
	REG_SOUND3CNT_L = SOUND3BANK32 | SOUND3SETBANK0;

	REG_SOUND3CNT_L |= SOUND3PLAY;

	REG_SOUND3CNT_H = SOUND3OUTPUT1 | adjustedLength;
	REG_SOUND3CNT_X=SOUND3INIT|SOUND3PLAYONCE| frequency ;
} 

    unsigned short* videoBuffer = (unsigned short*)0x6000000;

void DrawPixel3(int x, int y, unsigned short color);
void DrawChar(int left, int top, char letter, unsigned short color1, unsigned short color2);
void Print(int left, int top, char * str, unsigned short color1, unsigned short color2);

void DrawPixel3(int x, int y, unsigned short color)
{
    // create a pointer to the video buffer
	videoBuffer[y * 240 + x] = color;
}

void Print(int left, int top, char *str, unsigned short color1, unsigned short color2)
{
    int pos = 0;
    while (*str)
    {
        DrawChar(left + pos, top, *str++, color1, color2);
        pos += 8;
    }
}

void DrawChar(int left, int top, char letter, unsigned short color1, unsigned short color2)
{
	int x, y;
	char draw;

	for (y = 0; y < 8; y++)
		for (x = 0; x < 8; x++)
		{
			draw = font_matrix[(letter - 32) * 64 + y * 8 + x];
			if (draw)
				DrawPixel3(left + x, top + y, color1);
			else
				DrawPixel3(left + x, top + y, color2);
		}
}

void DrawPixel4(int x, int y, unsigned short color);
void DrawChar4(int left, int top, char letter, unsigned short color1, unsigned short color2);
void Print4(int left, int top, char * str, unsigned short color1, unsigned short color2);

void DrawPixel4(int x, int y, unsigned short color)
{
	// create a pointer to the video buffer
	videoBuffer[y * 120 + x] = color;
}

void Print4(int left, int top, char *str, unsigned short color1, unsigned short color2)
{
	int pos = 0;
	while (*str)
	{
		DrawChar4(left + pos, top, *str++, color1, color2);
		pos += 8;
	}
}

void DrawChar4(int left, int top, char letter, unsigned short color1, unsigned short color2)
{
	int x, y;
	char draw;

	for (y = 0; y < 8; y++)
		for (x = 0; x < 8; x++)
		{
			draw = font_matrix[(letter - 32) * 64 + y * 8 + x];
			if (draw)
				DrawPixel4(left + x, top + y, color1);
			else
				DrawPixel4(left + x, top + y, color2);
		}
}

void SleepQ(int i)
{ 
   int x, y; 
   int c; 
   for (y = 0; y < i; y++) 
   { 
      for (x = 0; x < 4000; x++) 
         c = c + 2; // do something to slow things down 
   } 
} 


//****************************************************************************** 
void FadeOut( u32 frames ) 
{
	u32 temp=frames;
   s8 Phase; 
   REG_BLDMOD = 0x00F7;
   for( Phase = 0; Phase < 17; Phase++ ) 
   { 
	   frames = temp;
      REG_COLEY = Phase; 
     while(frames--)
		 WaitForVblank();
   } 
} 

//****************************************************************************** 
void FadeIn( u32 frames ) 
{ 
	u32 temp = frames;
	s8 Phase;
	REG_BLDMOD = 0x00F7;
	for (Phase = 0; Phase < 17; Phase++)
	{
		frames = temp;
		REG_COLEY = 16-Phase;
		while (frames--)
			WaitForVblank();
	}
}

void MosaicOut(int delay)
{
    int i;
    for (i = 0; i < 16; i++) //loop through the mosaic values
    {
    	WaitForVblank();
        SET_MOSAIC(MOS_BG_H(i), MOS_BG_V(i), 0, 0); //set the bg mosaic
        Sleep(delay); //sleep for "delay" 
    }
}

void MosaicIn(int delay)
{
    int i;
    for (i = 15; i > -1; i--) //loop through the mosaic values
    {
     	WaitForVblank();
        SET_MOSAIC(MOS_BG_H(i), MOS_BG_V(i), 0, 0); //set the bg mosaic
        Sleep(delay); //sleep for "delay"
    }
}

void buffer(void)
{
	//
	// switch buffers
	// 
    if (vframe == 1)
		v_buffer = (unsigned short*)0x6000000; // buffer 1
    else
    	v_buffer = (unsigned short*)0x600A000; // buffer 0
 
    *(unsigned short*)0x4000000= 0x0404 | (vframe << 4) | 0x1000 | 0x40;
		
    vframe = 1 - vframe;
}

///Copy our sprite array to OAM
void CopyOAM()
{
	u16 loop;
	u16* temp;
	temp = (u16*)sprites;
	for(loop = 0; loop < 128*4; loop++)
	{
		OAM[loop] = temp[loop];
	}
}



//Set sprites to off screen
void InitializeSprites()
{
	int loop;
	for(loop = 0; loop < 128; loop++)
	{
		sprites[loop].attribute0 = 160;  //y to > 159
		sprites[loop].attribute1 = 240;  //x to > 239
	}

	offsetOAM = 0;
}



void initSprite(int spr,int size,int offset)
{
	int 	x,y;

	x = 240;
	y = 160;

	// set sprite offscreen, and set it up (size,etc)
	sprites[spr].attribute0 = COLOR_256 | SQUARE | x;
	sprites[spr].attribute1 = size | y;
	sprites[spr].attribute2 = 512 + offset; // NOTE: mode4 doesn't support the first tiles, so offset of 512 is requirerd
}

void initRotSprite(int spr,int size,int offset)
{
	int 	x,y;

	x = 240;
	y = 160;

	// set sprite offscreen, and set it up (size,etc)
	sprites[spr].attribute0 = COLOR_256 | SQUARE | ROTATION_FLAG | 0x200 | x;
	sprites[spr].attribute1 = size | ROTDATA(spr) | y;
	sprites[spr].attribute2 = 512 + offset; // NOTE: mode4 doesn't support the first tiles, so offset of 512 is requirerd
}

void updateSprite(int spr,int offset,int sprsize, int ani)
{
	int frame;
	int size;

	size = sprsize * 2;

	frame = size * ani;

	sprites[spr].attribute2 = (512 + offset) + frame; // NOTE: mode4 doesn't support the first tiles, so offset of 512 is requirerd
}



//move the sprite
void MoveSprite(OAMEntry* sp, int x, int y)
{
	if(x < 0)			//if it is off the left correct
		x = 512 + x;
	if(y < 0)			//if off the top correct
		y = 256 + y;

	sp->attribute1 = sp->attribute1 & 0xFE00;  //clear the old x value
	sp->attribute1 = sp->attribute1 | x;

	sp->attribute0 = sp->attribute0 & 0xFF00;  //clear the old y value
	sp->attribute0 = sp->attribute0 | y;
}

void RotateSprite(int rotDataIndex, s32 angle, s32 x_scale,s32 y_scale)
{

	s32 pa,pb,pc,pd;

	pa = ((x_scale) * (s32)COS[angle%360])>>8;    //(do my fixed point multiplies and shift back down)
	pb = ((y_scale) * (s32)SIN[angle%360])>>8;
	pc = ((x_scale) * (s32)-SIN[angle%360])>>8;
	pd = ((y_scale) * (s32)COS[angle%360])>>8;

	rotData[rotDataIndex].pa = pa;  //put them in my data struct
	rotData[rotDataIndex].pb = pb;
	rotData[rotDataIndex].pc = pc;
	rotData[rotDataIndex].pd = pd;
}



/////////////////////////////////////////////////////////////
// Hugo's own special part

void loadSpritePal(unsigned int * pal)
{
	int 	x;

	for(x = 0; x < 256; x++)
		OBJPaletteMem[x] = ((unsigned short*)pal)[x];
}

void loadSpriteGraphics(unsigned int * gfx,int size)
{ 
	int 	x;
	int		offset;

	//offset = size * place;

	for(x = 0; x < size; x++)
      	OAMData[(8192 + offsetOAM) + x] = ((unsigned short*)gfx)[x];

	offsetOAM +=size;
}	

void resetOffset(void)
{
	offsetOAM = 0;
}

void bgPal(unsigned int * pal)
{
	int 	p;

  	for (p = 0; p < 247; p++) 
		((unsigned short *)0x5000000)[p] = ((unsigned short*)pal)[p]; 

}


void bgPic(unsigned int * pic)
{
	int 	i;

	for (i = 0; i < 19200; i++)
  		((unsigned short*)v_buffer)[i] = ((unsigned short*)pic)[i];

}

void bgPic2Buffer(unsigned int * pic)
{
	int 	i;

	for (i = 0; i < 120*160; i++)
	{
  		((unsigned short*)0x6000000)[i] = ((unsigned short*)pic)[i];
		((unsigned short*)0x600A000)[i] = ((unsigned short*)pic)[i];
	}
}

void Initialize()
{
	WaitForVblank();
	fillpal("bg",0xFFFF);
	SetMode(MODE_4|BG2_ENABLE);
	REG_BG2CNT = BG_MOSAIC_ENABLE;
	Sleep(25);
	FadeOut(1);
}

typedef enum RESTART_FLAG {
	ROM_RESTART,	/*!< Restart from RAM entry point. */
	RAM_RESTART		/*!< restart from ROM entry point */
} RESTART_FLAG;


static inline
void VBlankIntrWait()	{ SystemCall(5); }

u16 CurrentPalette[512] EWRAM_BSS;

//---------------------------------------------------------------------------------
// fade table consists of color components & offsets in 8:8 form
// Red offset, Red component ...
//---------------------------------------------------------------------------------
s16 FadeTable[512*3*2] EWRAM_BSS;

//---------------------------------------------------------------------------------
static void GetCurrentPalette() {
//---------------------------------------------------------------------------------
	int i;
	u16 * Src = BG_COLORS;
	u16 * Dest = (u16 *)CurrentPalette;
	for (i = 0; i<512; i++) {
		*(Dest++) = *(Src++);
	}
}

//---------------------------------------------------------------------------------
void SetPalette2(u16 *Palette) {
//---------------------------------------------------------------------------------
	u16 *From, *To;
	From = (u16 *)Palette;
	To = (u16 *)BG_COLORS;
	int i;

	for (i = 0; i<512; i++) {
		*(To++) = *(From++);
	}
}

//---------------------------------------------------------------------------------
static void DoFade(u32 FadeCount) {
//---------------------------------------------------------------------------------
	int r,g,b,index,count,color;


	for (count=0; count<FadeCount;count++) {
		s16 *Src = FadeTable;
		u16 *Dest = CurrentPalette;

		for (index=0; index<512;index++) {
			r = *(Src++);
			r += *(Src);
			*(Src++)=r;

			g = *(Src++);
			g += *(Src);
			*(Src++)=g;

			b = *(Src++);
			b += *(Src);
			*(Src++)=b;

			color = (r>>8) | ((g>>8)<<5) | ((b>>8)<<10);
			*(Dest++) = color;
		}

		VBlankIntrWait();
		SetPalette2(CurrentPalette);
	}
}

//---------------------------------------------------------------------------------
/// Fade to a shade of grey
//---------------------------------------------------------------------------------
/**	Special case function for fade to Grey
	gray = 0 - 31 - final value of all components
*/
//---------------------------------------------------------------------------------
void FadeToGrayScale(int gray, int FrameCount) {
//---------------------------------------------------------------------------------
	int index,r,g,b,color;
	u16 *Src;
	s16 *Table;

	GetCurrentPalette();
	Src = CurrentPalette;
	Table = FadeTable;

	for (index=0;index<512; index++) {

		color = *(Src++);
		r = (color & 0x1f) << 8;
		g = (color>>5 & 0x1f) << 8;
		b = (color>>10 & 0x1f) << 8;

		*Table++ = ((gray<<8)-r) / FrameCount;
		*Table++ = r;

		*Table++ = ((gray<<8)-g) / FrameCount;
		*Table++ = g;

		*Table++ = ((gray<<8)-b) / FrameCount;
		*Table++ = b;
	}

	DoFade( FrameCount);
}

void drawbg2(u16* image, u16* pal)
{
	bgPic(image);
	bgPal(pal);
	bgPic2Buffer(image);
}

void setbg2(u16* image, u16* pal)
{
	WaitForVblank();
	REG_DM3SAD = (unsigned long)image;
	SetPalette(pal);
	REG_DM3DAD = (unsigned long)VideoBuffer;
	REG_DM3CNT = 0x80000000 | 120*160;
}

void setbg2novb(u16* image, u16* pal)
{
	REG_DM3SAD = (unsigned long)image;
	SetPalette(pal);
	REG_DM3DAD = (unsigned long)VideoBuffer;
	REG_DM3CNT = 0x80000000 | 120*160;
}

void setbg2m3(u16* image)
{
	WaitForVblank();
	REG_DM3SAD = (unsigned long)image;
	REG_DM3DAD = (unsigned long)VideoBuffer;
	REG_DM3CNT = 0x80000000 | 240*160;
}


void InvertBGPalette(void)
{
    int i;

    // go trough all 256 colors
    for(i=0; i<256; i++)
    {
        // Invert color of index i
        u16 Color = ACCESS_16(MEM_PAL_COL_PTR(i));

        // Calc new R,G,B Values
        u8 R = 255-RGB_GET_R_VALUE(Color);
        u8 G = 255-RGB_GET_G_VALUE(Color);
        u8 B = 255-RGB_GET_B_VALUE(Color);

        // Set new color
        ACCESS_16(MEM_PAL_COL_PTR(i)) = RGB(R, G, B);
    }

    return;
}

// EOF

void CycleBGPalette(void)
{
	int i;
/*
    Output from gfx2gba:

    Saving masterpalette to..: master.pal.c ... ok

    Total files read & converted.:   1
    Colors used before converting: 240
    Colors used after converting.: 187
    Colors saved.................:  53
*/
    #define COLORS_AFTER_CONVERTING 255
    
    
    // Save the last colorvalue
    ACCESS_16(MEM_PAL_COL_PTR(COLORS_AFTER_CONVERTING))=ACCESS_16(MEM_PAL_COL_PTR(1));
    
    // go trough all indices
    for(i=0; i<COLORS_AFTER_CONVERTING; i++)
    {
        // Swap color of index
        ACCESS_16(MEM_PAL_COL_PTR(i))=ACCESS_16(MEM_PAL_COL_PTR((i+1)));
    }

    return;
}

typedef struct                                                                  //sound variables
{
 const unsigned char* song;                                                     //pointer to sound's data array	
 int frequency;                                                                 //sound frequency
 int tic;                                                                       //increase up to sounds end
 int end;                                                                       //end of sound
}sounds; sounds sound[25];                                                      //array of sounds structs

void initsound16(int a, int f, int e, u16* d)
{
	sound[a].song=(void*)d; sound[a].frequency=f; sound[a].end=e; sound[a].tic=0;	
}

void initsound32(int a, int f, int e, u32* d)
{
	sound[a].song=(void*)d; sound[a].frequency=f; sound[a].end=e; sound[a].tic=0;	
}

void initsound8(int a, int f, int e, u8* d)
{
	sound[a].song=d; sound[a].frequency=f; sound[a].end=e; sound[a].tic=0;
}

void SaveInt(u16 offset, int value) //saves to SRAM
{
	int i;
	char string[7];
	sprintf(string, "%d", value);
	for(i=0; i < 32768; i++)
	{
		if(string[i] == 0)
		{
			break;
		}
		*(u8 *)(SRAM + offset + i) = string[i];
	}
}

void Savestr(u16 offset, char value) //saves to SRAM
{
	int i;
	char string[7];
	sprintf(string, "%d", value);
	for (i = 0; i < 32768; i++)
	{
		if (string[i] == 0)
		{
			break;
		}
		*(u8 *)(SRAM + offset + i) = string[i];
	}
}

int LoadInt(u16 offset) //Loads from SRAM
{
	int  i;
	char string[7];
	for(i = 0; i != 7; i++)
	{
		string[i] = *(u8 *)(SRAM + offset + i);
	}
	return atoi(string);
}

char GetROMOff(u16 offset) //Loads from SRAM
{
	int  i;
	char string[7];
	for (i = 0; i != 7; i++)
	{
		string[i] = *(u8 *)(ROM + offset + i);
	}
	return atoi(string);
}

int GetPixel3(int x, int y)
{
	return videoBuffer[y*240+x]; //returns the pixel color at the position given
} 

int GetPixel5(int x, int y)
{
	return videoBuffer[y*160+x]; //returns the pixel color at the position given
}

int GetPixel4(int x, int y)
{
	return videoBuffer[y*120+x]; //returns the pixel color at the position given
}

int GetArrayItem(int pos, u16* data) //gets item from array, good for Pixel color detection using mode 4 DMA.
{
	return data[pos];
}

int add(int var1, int var2)
{
	return var1 + var2;
}

int sub(int var1, int var2)
{
	return var1 - var2;
}

int divide(int var1, int var2)
{
	return var1/var2;
}

int mult(int var1, int var2)
{
	return var1*var2;
}

int len(char* data)
{
	return sizeof(data)/sizeof(data[0]);
}

int dist(int sx, int sy, int dx, int dy)
{
	return (dx+dy)-(sx+sy);
}


void drawRect(int r, int c, int width, int height, u16 color) { //draws rectangle
	int i,j;
	for (i = 0; i < height; i++) {
		for (j = 0; j < width; j++) {
			DrawPixel3(r + i, c + j, color);
		}
	}
}

void fillscreen3(u16 color) //fills screen with a solid color in mode 3
{
	int x1,y1;
	for(y1=0;y1<160;y1++)
	{
		for(x1=0;x1<240;x1++)
		{
			DrawPixel3(x1, y1, color);
		}
	}
}

void drawbitmap3(u16* data) //draws mode 3 bitmap
{
	int x1,y1;
	for(y1=0;y1<160;y1++)
	{
		for(x1=0;x1<240;x1++)
		{
			DrawPixel3(x1, y1, data[y1*240+x1]);
		}
	}
}

void fillpal(char *paltype, u16 color) //fills a palette of the selection with the same color for each slot
{
	int pixpos;
	if(paltype=="bg") //BGPaletteMem
	{
		for(pixpos=0;pixpos<256;pixpos++)
		{
			BGPaletteMem[pixpos] = color;
		}
	}else{
		if(paltype=="obj") //OBJPaletteMem
		{
			for(pixpos=0;pixpos<256;pixpos++)
			{
				OBJPaletteMem[pixpos] = color;
			}
		}else{ //if no kind of mem is selected
			SetMode(MODE_3|BG2_ENABLE); //resets everyhing
			for(pixpos=0;pixpos<256;pixpos++)
			{
				BGPaletteMem[pixpos] = 0x0000;
				OBJPaletteMem[pixpos] = 0x0000;
			}
			fillscreen3(0x0000);
			Print(8,8,"ERROR. INVALID PAL TYPE.",RED,BLACK); //error messgae
			while(1); //stops the program due to an invalid type
		}
	}
}

void DrawLine3(int x1, int y1, int x2, int y2, unsigned short color)
{
int i, deltax, deltay, numpixels;
int d, dinc1, dinc2;
int x, xinc1, xinc2;
int y, yinc1, yinc2;
//calculate deltaX and deltaY
deltax = abs(x2 - x1);
deltay = abs(y2 - y1);
//initialize
if(deltax >= deltay)
{
//If x is independent variable
numpixels = deltax + 1;
d = (2 * deltay) - deltax;
dinc1 = deltay << 1;
dinc2 = (deltay - deltax) << 1;
xinc1 = 1;
xinc2 = 1;
yinc1 = 0;
yinc2 = 1;
}
else{
//if y is independent variable
numpixels = deltay + 1;
d = (2 * deltax) - deltay;
dinc1 = deltax << 1;
dinc2 = (deltax - deltay) << 1;
xinc1 = 0;
xinc2 = 1;
yinc1 = 1;
yinc2 = 1;
}
//move the right direction
if(x1 > x2)
{
xinc1 = -xinc1;
xinc2 = -xinc2;
}
if(y1 > y2)
{
yinc1 = -yinc1;
yinc2 = -yinc2;
}
x = x1;
y = y1;
//draw the pixels
for(i = 1; i < numpixels; i++)
{
DrawPixel3(x, y, color);
if(d < 0)
{d = d + dinc1;
x = x + xinc1;
y = y + yinc1;
}
else
{
d = d + dinc2;
x = x + xinc2;
y = y + yinc2;
}
}
}

void DrawCircle3(int xCenter, int yCenter, int radius, int color)
{
	int x = 0;
	int y = radius;
	int p = 3 - 2 * radius;
	while (x <= y)
	{
		DrawPixel3(xCenter + x, yCenter + y, color);
		DrawPixel3(xCenter - x, yCenter + y, color);
		DrawPixel3(xCenter + x, yCenter - y, color);
		DrawPixel3(xCenter - x, yCenter - y, color);
		DrawPixel3(xCenter + y, yCenter + x, color);
		DrawPixel3(xCenter - y, yCenter + x, color);
		DrawPixel3(xCenter + y, yCenter - x, color);
		DrawPixel3(xCenter - y, yCenter - x, color);
		if (p < 0)
			p += 4 * x++ + 6;
		else
			p += 4 * (x++ - y--) + 10;
	}
}

typedef struct BG
{
	int x,y,n;
}BG;

//updates the horizontal offset (HOFS) and vertical offset (VOFS) from BG
void ScrollBG(BG *bg)
{
	switch(bg->n)
	{
	case 0:
		REG_BG0HOFS = bg->x;
		REG_BG0VOFS = bg->y;
		break;
	case 1:
		REG_BG1HOFS = bg->x;
		REG_BG1VOFS = bg->y;
		break;
	case 2:
		REG_BG2HOFS = bg->x;
		REG_BG2VOFS = bg->y;
		break;
	case 3:
		REG_BG3HOFS = bg->x;
		REG_BG3VOFS = bg->y;
		break;
	default:
		break;
	}
}


u32   state[N+1]; // state vector + 1 extra to not violate ANSI C
u32*  next;       // next random value is computed from here
s32   lft;       // can *next++ this many times before reloading

int do_regen;

void seedMT( u32 seed )
{
   u32 x = (seed | 0x1 ) & 0xFFFFFFFF;
   u32* s = state;
   u32 j = N;
   lft = 0;
   *s++ = x;
   
   while ( --j )
   {
      x *= 69069;
      *s = ( x & 0xFFFFFFFF );
      s++;
   }

   do_regen = 1;
}

u32 reloadMT()
{
   u32* p0 = state;
   u32* p2 = state + 2;
   u32* pM = state + M;
   u32 s0;
   u32 s1;
   int j;
   
   // if this is the first time through seed the algorithm.
   if ( lft < -1 ) seedMT( 4357U );
   
   lft = N-1;
   next = &(state[1]);
   
   for( s0 = state[0], s1 = state[1], j = ( N-M+1 ); --j; s0 = s1, s1 = *p2++ )
      *p0++ = ( *pM++ ^ (mixBits(s0, s1) >> 1) ^ (loBit(s1) ? K : 0));
   
   for( pM = state, j = M; --j; s0 = s1, s1 = *p2++ )
      *p0++ = ( *pM++ ^ ( mixBits(s0, s1) >> 1 ) ^ ( loBit(s1) ? K : 0 ));
   
   s1 = state[0];
   *p0 = ( *pM ^ ( mixBits( s0, s1 ) >> 1 ) ^ ( loBit( s1 ) ? K : 0 ));
   s1 ^= ( s1 >> 11 );
   s1 ^= ( s1 <<  7 ) & 0x9D2C5680U;
   s1 ^= ( s1 << 15 ) & 0xEFC60000U;
   return ( s1 ^ ( s1 >> 18 ));
}

u32 randomMT()
{
   u32 y;
   
   lft--;
   if ( lft < 0 ) 
   {
      if ( do_regen == 1 )
      {
         return( reloadMT() );
      } else {
         lft = N-1;
         next = &(state[1]);
      }
   }
   
   y  = *next;
   next++;
   y ^= ( y >> 11 );
   y ^= ( y <<  7 ) & 0x9D2C5680;
   y ^= ( y << 15 ) & 0xEFC60000;
   y ^= ( y >> 18 );
   return y;
}


// Add by Nokturn:
 u16 Random( u16 Range )
 {
	 return ((u16)randomMT() % Range);
 }
 
 void jmp(void* address)
 {
 	goto *address;
 }
 
void hardreset()
{
	goto *0x0000;
}

void cloneSprite(int ospr, int nspr) //duplicates a Sprite
{
		int 	x,y;

	x = 240;
	y = 160;

	// set sprite offscreen, and set it up (size,etc)
	sprites[nspr].attribute0 = sprites[ospr].attribute0;
	sprites[nspr].attribute1 = sprites[ospr].attribute1;
	sprites[nspr].attribute2 = sprites[ospr].attribute2; // NOTE: mode4 doesn't support the first tiles, so offset of 512 is requirerd
}

void SleepF(double i)
{ 
   int x, y; 
   int c; 
   for (y = 0; y < i; y++) 
   { 
      for (x = 0; x < 4000; x++) 
         c = c + 2; // do something to slow things down 
   } 
} 


void scanlines3(u16* color, float time)
{
	int x,y;
	
	for(x=0; x<240; x+=2)
	{
		vsync
		for(y=0;y<160;y+=2)
		{
			DrawPixel3(x-1,y,color);	
			DrawPixel3(x,y,color);
			DrawPixel3(240-x+1,y-1,color);	
			DrawPixel3(240-x,y-1,color);
		}
		SleepF(time);
	}
}

void scanlinesdata3(u16* data, float time)
{
	int x1,y1;
	
	for(x1=0; x1<240; x1+=2)
	{
		vsync
		for(y1=0;y1<160;y1+=2)
		{
			DrawPixel3(x1-1,y1,data[y1*240+x1-1]);	
			DrawPixel3(x1,y1,data[y1*240+x1]);
			DrawPixel3(240-x1+1,y1-1,data[(y1-1)*240+x1+1]);	
			DrawPixel3(240-x1,y1-1,data[(y1-1)*240+x1]);
		}
		SleepF(time);
	}
}

void SetOBJBefore(int spr1, int spr2)
{
	return 0;
}

void SetOBJBehind(int spr1, int spr2)
{
	return 0;
}

void leftwipe3(u16* color, float time)
{int x1,y1;
	for(x1=0;x1<240;x1++)
	{
		for(y1=0;y1<160;y1++)
		{
			DrawPixel3(x1,y1,color);
		}
		SleepF(time);
	}
}

void rightwipe3(u16* color, float time)
{int x1,y1;
	for(x1=240;x1>0;x1--)
	{
		for(y1=0;y1<160;y1++)
		{
			DrawPixel3(x1,y1,color);
		}
		SleepF(time);
	}
}
void topwipe3(u16* color, float time)
{int x1,y1;
	for(y1=0;y1<160;y1++)
	{
		for(x1=240;x1>0;x1--)
		{
			DrawPixel3(x1,y1,color);
		}
		SleepF(time);
	}
}
void bottomwipe3(u16* color, float time)
{int x1,y1;
	for(y1=160;y1>0;y1--)
	{
		for(x1=240;x1>0;x1--)
		{
			DrawPixel3(x1,y1,color);
		}
		SleepF(time);
	}
}
void static3()
{int x;
	x=rand() % 2;
	if(x==1)
	{
		DrawPixel3(rand() % 240, rand() % 160, 0x0000);
	}else{
		DrawPixel3(rand() % 240, rand() % 160, 0xFFFF);
	}
}
void circlewipe3(u16* color, float time)
{int r,i;
	for(r=0;r<120;r++)
	{
		DrawCircle3(120, 80, r, color);
		SleepF(time);
	}
}
void binarywipe3(u16* color, float time)
{
	Print(0,0,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,8,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,16,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,24,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,32,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,40,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,48,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,8,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,16,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,24,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,32,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,40,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,48,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,56,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,64,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,72,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,80,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,88,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,96,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,104,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,112,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,120,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,128,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,136,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,140,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,148,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,156,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
	Print(0,164,"101001010010001100110010110010", color, BLACK);
	SleepF(time);
}

void coolscanlines3(u16* color, float time)
{int i;
	for(i=1;i<160;i+=2)
	{
		DrawLine3(0,i,240,i,color);
		SleepF(time);
	}
	for(i=240;i>0;i-=2)
	{
		DrawLine3(0,i,240,i,color);
		SleepF(time);
	}
}

int GetBGPalPoint(int slot)
{
	return BGPaletteMem[slot];
}

int GetOBJPalPoint(int slot)
{
	return OBJPaletteMem[slot];
}

void loadSpritePalPart(int start, u16* data, int end)
{int i;
	for(i=start;i<end;i++)
	{
		OBJPaletteMem[i] = data[i-start];
	}
}

void loadBGPalPart(int start, u16* data, int end)
{int i;
	for(i=start;i<end;i++)
	{
		BGPaletteMem[i] = data[i-start];
	}
}

void SetBGPalPoint(int slot, u16* color)
{
	BGPaletteMem[slot]=color;
}

void SetOBJPalPoint(int slot, u16* color)
{
	OBJPaletteMem[slot]=color;
}

void glideSpritetoPos(int spr, int x1, int y1, int x2, int y2, int16 time)
{
	MoveSprite(&sprites[spr], x1, y1);
int i, deltax, deltay, numpixels;
int d, dinc1, dinc2;
int x, xinc1, xinc2;
int y, yinc1, yinc2;
//calculate deltaX and deltaY
deltax = abs(x2 - x1);
deltay = abs(y2 - y1);
//initialize
if(deltax >= deltay)
{
//If x is independent variable
numpixels = deltax + 1;
d = (2 * deltay) - deltax;
dinc1 = deltay << 1;
dinc2 = (deltay - deltax) << 1;
xinc1 = 1;
xinc2 = 1;
yinc1 = 0;
yinc2 = 1;
}
else{
//if y is independent variable
numpixels = deltay + 1;
d = (2 * deltax) - deltay;
dinc1 = deltax << 1;
dinc2 = (deltax - deltay) << 1;
xinc1 = 0;
xinc2 = 1;
yinc1 = 1;
yinc2 = 1;
}
//move the right direction
if(x1 > x2)
{
xinc1 = -xinc1;
xinc2 = -xinc2;
}
if(y1 > y2)
{
yinc1 = -yinc1;
yinc2 = -yinc2;
}
x = x1;
y = y1;
//draw the pixels
for(i = 1; i < numpixels; i++)
{
	vsync
	CopyOAM();
MoveSprite(&sprites[spr], x, y);
if(d < 0)
{d = d + dinc1;
x = x + xinc1;
y = y + yinc1;
}
else
{
d = d + dinc2;
x = x + xinc2;
y = y + yinc2;
}
}
SleepF(time);
}

void playSoundUntilDone(int s, int end) {
 REG_SOUNDCNT1_H = 0x0B04;                                                       //REG_SOUNDCNT_H = 0000 1011 0000 0100, volume = 100, sound goes to the left, sound goes to the right, timer 0 is used, FIFO buffer reset
 REG_SOUNDCNT1_X = 0x0080;                                                       //REG_SOUNDCNT_X = 0000 0000 1000 0000, enable the sound system, DMA 1
 REG_SD1SAD      = (unsigned long) sound[s].song;                                //REG_DM1SAD = NAME, address of DMA source is the digitized music sample
 REG_SD1DAD      = 0x040000A0;                                                   //REG_DM1DAD = REG_SGFIFOA, address of DMA destination is FIFO buffer for direct sound A
 REG_SD1CNT_H    = 0xB640;                                                       //REG_DM1CNT_H = 1011 0110 0100 0000, DMA destination is fixed, repeat transfer of 4 bytes when FIFO , buffer is empty, enable DMA 1 (number of DMA transfers is ignored), INTERRUPT
 REG_TM0SD       = 65536-(16777216/sound[s].frequency);                          //REG_TM0D = 65536-(16777216/frequency);, play sample every 16777216/frequency CPU cycles
 REG_TMSDCNT     = 0x00C0;  
 Sleep(end);
 REG_SOUNDCNT1_H = 0;                                                       //REG_SOUNDCNT_H = 0000 1011 0000 0100, volume = 100, sound goes to the left, sound goes to the right, timer 0 is used, FIFO buffer reset
 REG_SOUNDCNT1_X = 0;                                                       //REG_SOUNDCNT_X = 0000 0000 1000 0000, enable the sound system, DMA 1
 REG_SD1SAD      = 0;                                //REG_DM1SAD = NAME, address of DMA source is the digitized music sample
 REG_SD1DAD      = 0;                                                   //REG_DM1DAD = REG_SGFIFOA, address of DMA destination is FIFO buffer for direct sound A
 REG_SD1CNT_H    = 0;                                                       //REG_DM1CNT_H = 1011 0110 0100 0000, DMA destination is fixed, repeat transfer of 4 bytes when FIFO , buffer is empty, enable DMA 1 (number of DMA transfers is ignored), INTERRUPT
 REG_TM0SD       = 0;                          //REG_TM0D = 65536-(16777216/frequency);, play sample every 16777216/frequency CPU cycles
 REG_TMSDCNT     = 0;  
}

void spl_CreateFakeBSOD()
{
	fillscreen3(BLUE);
	Print(20,8,"HARDWARE FAILURE.CONTACT ", WHITE, BLUE);
	Print(16,17,"NINTENDO CUSTOMER SUPPORT. ", WHITE, BLUE);
	Print(8,26,"MDR_BUS_ERR", WHITE, BLUE);
	DrawLine3(33,33,39,33,WHITE);
	DrawLine3(64,33,71,33,WHITE);
	Print(8,35,"ILL_INSTR", WHITE, BLUE);
	DrawLine3(33,42,39,42,WHITE);
	Print(16,80,"0XDEADDEAD 0X64C0 0X00CC33", WHITE, BLUE);
	Print(16,89,"0XFFFFFFFF 0x001F 0X1F3AE0", WHITE, BLUE);
	Print(8,98,"0X5656 (0X0000 0X6666 0X3333)", WHITE, BLUE);
	while(1);
}
#define  unfinishedfunc vsync
#define  unfinishedint return 0;
#define  bit0     1
#define  bit1     2
#define  bit2     4
#define  bit3     8
#define  bit4    16
#define  bit5    32
#define  bit6    64
#define  bit7   128
#define  bit8   256
#define  bit9   512
#define  bitA  1024
#define  bitB  2048
#define  bitC  4096
#define  bitD  8192
#define  bitE 16384
#define  bitF 32768

int GetOBJPos(int spr, int type)
{
	int reg;
	int start = 0x07000000;
	reg = 0x07000000 + (spr * 0x10);
	if (type == 0)
	{
		return (OAMmem[reg] + 8); //y
	}
	if (type == 1)
	{
		return (OAMmem[reg] + 0xA); //x
	}
}
int GetOBJAttrib(int spr, int att)
{
	if(att==0)
	{
		return sprites[spr].attribute0;
	}
	if(att==1)
	{
		return sprites[spr].attribute1;
	}
	if(att==2)
	{
		return sprites[spr].attribute2;
	}
	if(att==3)
	{
		return sprites[spr].attribute3;
	}
}
int GetOBJOffset(int spr)
{
	unfinishedint
}
u16 GetDataTile(int tile, u16* data)
{
	int x;
	return data[((8*tile)*240)+(x*8)];
}
void loadBGTiles(u16* data)
{int i;
	while(*data)
	{
		BGTileMem[i]=data[i];
	}
}
void replaceArrayElmt(int byte, u16* data, char *nbyte)
{
	data[byte]=*nbyte;
}

void drawbitmap3att(u16* data, int width, int height) //draws mode 3 bitmap
{int x1,y1;
	for(y1=0;y1<height;y1++)
	{
		for(x1=0;x1<width;x1++)
		{
			DrawPixel3(x1, y1, data[x1*y1]);
		}
	}
}
#define GetMemValue(off) Memory[(off)]
char GetROMHeader() //Loads from SRAM
{
	u16 offset = 160;
	int  i;
	char header[12];
	for (i = 0; i != 12; i++)
	{
		header[i] = *(u8 *)(ROM + offset + i);
	}
	return atoi(header);
}

void FadeOutWhite( u32 frames ) 
{ 
	u32 temp = frames;
	s8 Phase;
	REG_BLDMOD = 0x00BF;
	for (Phase = 0; Phase < 17; Phase++)
	{
		frames = temp;
		REG_COLEY = Phase;
		while (frames--)
			WaitForVblank();
	}
} 

//****************************************************************************** 
void FadeInWhite( u32 frames ) 
{ 
	u32 temp = frames;
	s8 Phase;
	REG_BLDMOD = 0x00BF;
	for (Phase = 0; Phase < 17; Phase++)
	{
		frames = temp;
		REG_COLEY = 16 - Phase;
		while (frames--)
			WaitForVblank();
	}
}