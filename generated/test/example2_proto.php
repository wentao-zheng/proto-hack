<?hh // strict
namespace fiz\baz;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: test/example2.proto

newtype AEnum2_enum_t as int = int;
abstract class AEnum2 {
  const AEnum2_enum_t Z = 0;
  private static dict<int, string> $itos = dict[
    0 => 'Z',
  ];
  public static function ToStringDict(): dict<int, string> {
    return self::$itos;
  }
  private static dict<string, int> $stoi = dict[
    'Z' => 0,
  ];
  public static function FromMixed(mixed $m): AEnum2_enum_t {
    if ($m is string) return idx(self::$stoi, $m, \is_numeric($m) ? ((int) $m) : 0);
    if ($m is int) return $m;
    return 0;
  }
  public static function FromInt(int $i): AEnum2_enum_t {
    return $i;
  }
}

type example2Fields = shape (
  ?'zomg' => int,
);
class example2 implements \Protobuf\Message {
  public int $zomg;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'zomg' => int,
  ) $s = shape()) {
    $this->zomg = $s['zomg'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function setFields(example2Fields $s = shape()): void {
    if (Shapes::keyExists($s, 'zomg')) $this->zomg = $s['zomg'];
  }

  public function getNonDefaultFields(): example2Fields {
    $s = shape();
    if ($this->zomg !== 0) $s['zomg'] = $this->zomg;
    return $s;
  }

  public function MessageName(): string {
    return "fiz.baz.example2";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->zomg = $d->readVarint32Signed();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->zomg !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->zomg);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeInt32('zomg', 'zomg', $this->zomg, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'zomg':
          $this->zomg = \Protobuf\Internal\JsonDecoder::readInt32Signed($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is example2)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->zomg = $o->zomg;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

type refexample3Fields = shape (
  ?'funky' => ?\FunkyFields,
);
class refexample3 implements \Protobuf\Message {
  public ?\Funky $funky;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'funky' => ?\Funky,
  ) $s = shape()) {
    $this->funky = $s['funky'] ?? null;
    $this->XXX_unrecognized = '';
  }

  public function setFields(refexample3Fields $s = shape()): void {
    if (Shapes::keyExists($s, 'funky')) {
      if ($this->funky is null) $this->funky = new \Funky();
      $this->funky->setFields($s['funky'] as nonnull);
    }
  }

  public function getNonDefaultFields(): refexample3Fields {
    $s = shape();
    if ($this->funky is nonnull) $s['funky'] = $this->funky->getNonDefaultFields();
    return $s;
  }

  public function MessageName(): string {
    return "fiz.baz.refexample3";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->funky;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('funky', 'funky', $this->funky, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'funky':
          if ($v === null) break;
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeJsonFrom($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is refexample3)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $tmp = $o->funky;
    if ($tmp !== null) {
      $nv = new \Funky();
      $nv->CopyFrom($tmp);
      $this->funky = $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}


class XXX_FileDescriptor_test_example2__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'test/example2.proto';
  const string RAW =
  'eNriEi5JLS7RT61IzC3ISTXSKyjKL8kXYk/LrNJLSqySQpE1hsgqyXFxwNQLCXGxVOXnpk'
  .'swKjBqsAaB2UraXNxFqWkwTUIyXKxppXnZlWA13EZsem4gXhBEUIufi83RNa8010iIlYsx'
  .'SoAhiQ1siTEgAAD//x4gLAg';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
