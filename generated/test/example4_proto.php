<?hh // strict

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: test/example4.proto

type pb_ClassFields = shape (
  ?'name' => string,
);
class pb_Class implements \Protobuf\Message {
  public string $name;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function setFields(pb_ClassFields $s = shape()): void {
    if (Shapes::keyExists($s, 'name')) $this->name = $s['name'];
  }

  public function getNonDefaultFields(): pb_ClassFields {
    $s = shape();
    if ($this->name !== '') $s['name'] = $this->name;
    return $s;
  }

  public function MessageName(): string {
    return "Class";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is pb_Class)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->name = $o->name;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

type pb_InterfaceFields = shape (
  ?'class' => ?\pb_ClassFields,
);
class pb_Interface implements \Protobuf\Message {
  public ?\pb_Class $class;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'class' => ?\pb_Class,
  ) $s = shape()) {
    $this->class = $s['class'] ?? null;
    $this->XXX_unrecognized = '';
  }

  public function setFields(pb_InterfaceFields $s = shape()): void {
    if (Shapes::keyExists($s, 'class')) {
      if ($this->class is null) $this->class = new \pb_Class();
      $this->class->setFields($s['class'] as nonnull);
    }
  }

  public function getNonDefaultFields(): pb_InterfaceFields {
    $s = shape();
    if ($this->class is nonnull) $s['class'] = $this->class->getNonDefaultFields();
    return $s;
  }

  public function MessageName(): string {
    return "Interface";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->class == null) $this->class = new \pb_Class();
          $this->class->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->class;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('class', 'class', $this->class, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'class':
          if ($v === null) break;
          if ($this->class == null) $this->class = new \pb_Class();
          $this->class->MergeJsonFrom($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is pb_Interface)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $tmp = $o->class;
    if ($tmp !== null) {
      $nv = new \pb_Class();
      $nv->CopyFrom($tmp);
      $this->class = $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

type NotClassFields = shape (
  ?'name' => string,
);
class NotClass implements \Protobuf\Message {
  public string $name;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function setFields(NotClassFields $s = shape()): void {
    if (Shapes::keyExists($s, 'name')) $this->name = $s['name'];
  }

  public function getNonDefaultFields(): NotClassFields {
    $s = shape();
    if ($this->name !== '') $s['name'] = $this->name;
    return $s;
  }

  public function MessageName(): string {
    return "NotClass";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is NotClass)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->name = $o->name;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

class AndClient {
  public function __construct(private \Grpc\Invoker $invoker) {
  }

  public async function throw(\Grpc\Context $ctx, \pb_Class $in, \Grpc\CallOption ...$co): Awaitable<\Errors\Result<\google\protobuf\pb_Empty>> {
    $out = new \google\protobuf\pb_Empty();
    $err = await $this->invoker->Invoke($ctx, '/And/throw', $in, $out, ...$co);
    if ($err->Ok()) {
      return \Errors\ResultV($out);
    }
    return \Errors\ResultE($err);
  }
}

interface AndServer {
  public function throw(\Grpc\Context $ctx, \pb_Class $in): Awaitable<\Errors\Result<\google\protobuf\pb_Empty>>;
}

function AndServiceDescriptor(AndServer $service): \Grpc\ServiceDesc {
  $methods = vec[];
  $handler = async (\Grpc\Context $ctx, \Grpc\Unmarshaller $u): Awaitable<\Errors\Result<\Protobuf\Message>> ==> {
    $in = new \pb_Class();
    $err = $u->Unmarshal($in);
    if (!$err->Ok()) {
      return \Errors\ResultE(\Errors\Errorf('proto unmarshal: %s', $err->Error()));
    }
    return (await $service->throw($ctx, $in))->As<\Protobuf\Message>();
  };
  $methods []= new \Grpc\MethodDesc('throw', $handler);
  return new \Grpc\ServiceDesc('And', $methods);
}

function RegisterAndServer(\Grpc\Server $server, AndServer $service): void {
  $server->RegisterService(AndServiceDescriptor($service));
}

class XXX_FileDescriptor_test_example4__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'test/example4.proto';
  const string RAW =
  'eNriEi5JLS7RT61IzC3ISTXRKyjKL8mXkk7Pz0/PSdUH85JK0/RTcwtKKiGSStJcrM45ic'
  .'XFQkJcLHmJuakSjAqMGpxBYLaSJhenZ15JalFaYnKqkAwXazJIJVgFtxGbHlhfEERQSY6L'
  .'wy+/BKdRRgZczI55KUKaXKwlGUX55UJQ7VJiehDX6cFcp+cKcp0SQxIbWMQYEAAA//9WMz'
  .'4i';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
